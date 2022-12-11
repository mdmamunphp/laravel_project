<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Branche;
use App\Purchase;
use App\Sales_detail;
use App\Customer;
use App\Sale;

class SalesController extends Controller
{

    public function index()
    {
        //
        $product = Product::all();
        $branche = Branche::all();
        $customer = Customer::all();
        return view('sales_marketing.sales.sales.index', compact('product','branche','customer'));

    }

    public function sales_summary(){

           $sale = Sale::all();
           $sales=DB::SELECT("select sum(sub_total) stotal,sales_date from sales  group by sales_date ");
        return view('report.sales_report.sales_summary.index', compact('sale','sales'));

    }


    public function create()
    {
        //
    }



    
    public function store(Request $request)
    {


  echo   $request->sub_total ."<br>";
  echo   $request->discount ."<br>";
 echo    $request->due_amount ."<br>";
  echo   $request->paid_amount;
//die();
      //  $p=$request->supplier;
        $sales =new Sale;
        $sales->customer_id=session('customer_id');
        $sales->sales_date=session('sales_date');
        $sales->branche_id=session('branche_id');
        $sales->invoice_id=session('invoice_id');
        $sales->sub_total=$request->sub_total;
        $sales->paid_amount=$request->paid_amount;
        $sales->due_amount=$request->due_amount;
        $sales->discount=$request->discount;
        $sales->save();

        $p_id=$sales->id;
       // return response()->json($purchase);
        // echo "store controller";
        // print_r(session('sales'));
        // die();
        // $vendor_id= $request->cmbVendor;

        // DB::insert("insert into invoice(vendor_id,discount,shipping_address)values('$vendor_id','0','NA')");

        // $invoice_id=DB::getPdo()->lastInsertId();

        foreach(session('sales') as $item_id=>$details){




            $purchase_d =new Sales_detail;
            $purchase_d->sales_id=$p_id;
            $purchase_d->product_id=$details['product_id'];
            $purchase_d->sales_price=$details['price'];
            $purchase_d->quantity=$details['quantity'];

            $purchase_d->save();


        //    $qty=$details["qty"];
        //    $price=$details["price"];
        //    DB::insert("insert into invoice_details(invoice_id,item_id,qty,price,discount)values('$invoice_id','$item_id','$qty','$price','0')");

        //    echo $id." ";
        //    echo $details["name"]."<br>";
        }


        session()->forget('sales');
        session()->forget(["sales_date","customer_id","invoice_id","branche_id"]);
        session()->flash('success','Product removed successfully');
      //  return response()->json($purchase);
        return redirect()->back();

        //return view('invoice.store');
    }


    public function salesadd(Request $request)
    {
       // echo $request->purchase_price;
      //  die();
        // echo $request->supplier_id  ."<br>";
        // echo   $request->invoice_id  ."<br>";
        // echo   $request->purchase_date ."<br>";
        // echo   $request->branche_id ."<br>";
        $sales = session()->get('send');
        session([
                "sales_date"=>$request->sales_date,
                "customer_id"=>$request->customer_id,
                "invoice_id"=>$request->invoice_id,
                "branche_id"=>$request->branche_id]);
  //die();

      $product = Product::find($request->product_id);

       // $id=$request->product_id;
        $sales = session()->get('sales');

        if (!$sales) {

                    $sales = [
                        $request->product_id => [
                            "name" => $product->name,
                            "product_id" => $request->product_id,
                            "price" => $request->sales_price,
                            "quantity" => $request->quantity,


                        ]

                ];

            session()->put('sales', $sales);
            return redirect()->back()->with('success', 'Product added to sales successfully!');
        }

       // return response()->json($sales);

       if(isset($sales[$request->product_id])) {

        $sales[$request->product_id]['quantity']++;
        session()->put('sales', $sales);
        return redirect()->back()->with('success', 'Product added to sales successfully!');

    }
    $sales[$request->product_id] = [
        "name" => $product->name,
        "product_id" => $request->product_id,
        "price" => $request->sales_price,
        "quantity" => $request->quantity,
        "branche_id" => $request->branche_id,
        "customer_id" => $request->customer_id,
        "invoice_id" => $request->invoice_id
    ];

    session()->put('sales', $sales);

    return redirect()->back()->with('success', 'Product added to sales successfully!');



    }


    public function remove(Request $request)
    {

        //echo $request->txtId;
        if($request->product_id) {

            $sales = session()->get('sales');

            if(isset($sales[$request->product_id])) {
                unset($sales[$request->product_id]);
                session()->put('sales', $sales);
            }

            session()->flash('success','Product removed successfully');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        if($request->product_id) {

            $sales = session()->get('sales');

            if(isset($sales[$request->product_id])) {
                unset($sales[$request->product_id]);
                session()->put('sales', $sales);
            }

            session()->flash('success','Product removed successfully');
            return redirect()->back();
        }
        //
    }
}
