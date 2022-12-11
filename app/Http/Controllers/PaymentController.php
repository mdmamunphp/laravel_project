<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Sellinvoice;
use App\Product;
use App\Branche;
use App\Customer;
use App\Sale;
use App\Purchase;
//images upload
use Illuminate\Http\UploadedFile;

class PaymentController extends Controller
{

    public function index()
    {
//
    }


    public function received_from_customer(){

 //
 $user = Sale::all();
 //  $product = product::all();
   $bran = Branche::all();
   $customer = Customer::all();

   // print_r($user);
    return view('accounts.payments.received_from_customer',compact('user','bran','customer'));


    }
    public function payment_to_supplier(){
        $product = Product::all();
        $purchase = Purchase::all();


        // $user =DB::select("select p.*,users.id,users.name,s.id,s.name sname from purchaseinvoices p,users,suppliers s where p.user_id=users.id and p.user_id=1 and p.supplier_id=s.id");
         return view('accounts.payments.payment_to_supplier',compact('purchase','product'));


    }
    public function due_update(Request $request)
    {
        // echo $request->paid;
        // die();
        DB::update("update sales set paid_amount='$request->paid',due_amount='$request->due' where id=$request->id");
        return redirect()->back();

//
    }
    public function update_supplier(Request $request)
    {
    //     echo $request->id;
    //    echo "ok";

        DB::update("update purchases set paid_amount ='$request->paid',due_amount='$request->due' where id=$request->id");
        return redirect()->back();




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        //
    }
}
