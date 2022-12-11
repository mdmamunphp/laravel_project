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
use App\Purchases_detail;
use App\Supplier;
use App\Subcategorie;
use App\Categorie;
use App\Unit;
use Illuminate\Http\UploadedFile;

class PurchasesController extends Controller
{

    public function index()
    {
        //
        $product = Product::all();
        $branche = Branche::all();
        $supplier = Supplier::all();
        $sub = Subcategorie::all();
        $cate = Categorie::all();      
        $unit = Unit::all();
        return view('inventory.purchase.index', compact('product','branche','supplier','sub','cate','unit'));

    }


    public function create()
    {
        //
    }
    public function store(Request $request)
    {




        $purchase =new Purchase;
        $purchase->supplier_id=session('supplier_id');
        $purchase->purchase_date=session('purchase_date');
        $purchase->branche_id=session('branche_id');
        $purchase->invoice_id=session('invoice_id');
        $purchase->sub_total=$request->sub_total;
        $purchase->paid_amount=$request->paid_amount;
        $purchase->due_amount=$request->due_amount;
        $purchase->discount=$request->discount;
        $purchase->save();

        $p_id=$purchase->id;
       // return response()->json($purchase);


        foreach(session('cart') as $item_id=>$details){




            $purchase_d =new Purchases_detail;
            $purchase_d->purchases_id=$p_id;
            $purchase_d->product_id=$details['product_id'];
            $purchase_d->purchase_price=$details['price'];
            $purchase_d->quantity=$details['quantity'];

            $purchase_d->save();


        //    $qty=$details["qty"];
        //    $price=$details["price"];
        //    DB::insert("insert into invoice_details(invoice_id,item_id,qty,price,discount)values('$invoice_id','$item_id','$qty','$price','0')");

        //    echo $id." ";
        //    echo $details["name"]."<br>";

        }


        session()->forget('cart');
        session()->forget(["purchase_date","supplier_id","invoice_id","branche_id"]);
        session()->flash('success','Product removed successfully');
      //  return response()->json($purchase);
        return redirect()->back();

        //return view('invoice.store');
    }


    public function purchaseadd(Request $request)
    {
       // echo $request->purchase_price;
      //  die();
        // echo $request->supplier_id  ."<br>";
        // echo   $request->invoice_id  ."<br>";
        // echo   $request->purchase_date ."<br>";
        // echo   $request->branche_id ."<br>";
        $cart = session()->get('send');
        session([
                "purchase_date"=>$request->purchase_date,
                "supplier_id"=>$request->supplier_id,
                "invoice_id"=>$request->invoice_id,
                "branche_id"=>$request->branche_id]);
  //die();

      $product = Product::find($request->product_id);

       // $id=$request->product_id;
        $cart = session()->get('cart');

        if (!$cart) {

                    $cart = [
                        $request->product_id => [
                            "name" => $product->name,
                            "product_id" => $request->product_id,
                            "price" => $request->purchase_price,
                            "quantity" => $request->quantity,


                        ]

                ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

       // return response()->json($cart);

       if(isset($cart[$request->product_id])) {

        $cart[$request->product_id]['quantity']++;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

     }
    $cart[$request->product_id] = [
        "name" => $product->name,
        "product_id" => $request->product_id,
        "price" => $request->purchase_price,
        "quantity" => $request->quantity,
        "branche_id" => $request->branche_id,
        "supplier_id" => $request->supplier_id,
        "invoice_id" => $request->invoice_id
    ];

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart successfully!');



    }


    public function remove(Request $request)
    {

        //echo $request->txtId;
        if($request->product_id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }

            session()->flash('success','Product removed successfully');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->product_id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }

            session()->flash('success','Product removed successfully');
            return redirect()->back();
        }
        //
    }
}
