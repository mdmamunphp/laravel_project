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

//images upload
use Illuminate\Http\UploadedFile;
class SellinvoicesController extends Controller
{

    public function index()
    {
          // echo "index";
         //
        $user = Sale::all();
      //  $product = product::all();
        $bran = Branche::all();
        $customer = Customer::all();

        // print_r($user);
         return view('sales_marketing.sales.sell_invoice.index',compact('user','bran','customer'));

    }


    public function create()
    {
        //


    }


    public function store(Request $data)
    {
        //
        $Sellinvoice = new Sellinvoice;
        $Sellinvoice->name=$data->name;
        $Sellinvoice->branch_id=$data->branch_id;
        $Sellinvoice->customer_id=$data->customer_id;
        $Sellinvoice->sale_price=$data->sale_price;
        $Sellinvoice->quantity=$data->quantity;
        $Sellinvoice->sale_date=$data->sale_date;
        $Sellinvoice->sub_total=$data->sub_total;
        $Sellinvoice->discount=$data->discount;
        $Sellinvoice->paid_amount=$data->paid_amount;
        $Sellinvoice->due_amount=$data->due_amount;
        $Sellinvoice->save();

    }


    public function show($id)
    {
        //
        $user = Sale::all();
        //  $product = product::all();
          $bran = Branche::all();
          $customer = customer::all();

          // print_r($user);
           return view('sales_marketing.sales.sell_invoice.views',compact('user','bran','customer'));

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
