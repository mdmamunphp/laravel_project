<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Purchaseinvoice;
use App\Product;
use App\Purchase;
use App\Purchases_detail;

//images upload
use Illuminate\Http\UploadedFile;
class PurchaseinvoicesController extends Controller
{

    public function index()
    {
        $product = Product::all();
        $purchase = Purchase::all();


        // $user =DB::select("select p.*,users.id,users.name,s.id,s.name sname from purchaseinvoices p,users,suppliers s where p.user_id=users.id and p.user_id=1 and p.supplier_id=s.id");
         return view('sales_marketing.products.purchase_invoice.index',compact('purchase','product'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

      //   echo $id;
        // die();
     //   $product = Product::all();
     //   $user = Purchase::findorfail($id);
      //  echo $user->id;
        // print_r($user);
       // die();

       $suppliers=DB::SELECT("select s.* from purchases p,suppliers s where p.id=$id and s.id=p.supplier_id");



       $purchase_detail=DB::SELECT("select pd.quantity quantity,pd.purchase_price purchase_price,p.name name from purchases_details pd,products p where pd.purchases_id=$id and pd.product_id=p.id");


        return view('sales_marketing.products.purchase_invoice.views',compact('purchase_detail','suppliers'));



    }



    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
