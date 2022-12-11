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
use App\Subcategorie;
use App\Categorie;
use App\Branche;
use App\Tax;
use App\Unit;
//images upload
use Illuminate\Http\UploadedFile;
class ProductsController extends Controller
{
    public function index()
    {
        $user = Product::all();
        $sub = Subcategorie::all();
        $cat = Categorie::all();
      
        $unit = Unit::all();
        // print_r($user);
         return view('sales_marketing.products.products.index',compact('user','sub','cat','unit'));
    }


    public function create()
    {
        //
    }
   
    public function store(Request $data)
    {
        //
       // echo "ok";
       // echo $data->unit_id;
        // print_r($data);
       //  die();
 //return response()->json($data);
 //die();
        $Product = new Product;
        $Product->name=$data->name;
        $Product->description=$data->description;
        $Product->categories_id=$data->categories_id;
        $Product->subcategories_id=$data->subcategories_id;      
        $Product->unit_id=$data->unit_id;
        $Product->brand_id=$data->brand_id;       
        $Product->sku=$data->sku;
        $Product->barcode=$data->barcode;
      //  $Product->images=$data->images;
        $Product->save();

        $image=$data->file('images');
        //return response()->json($data);
       if($image){

             $image_name=hexdec(uniqid());
             $ext =strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/admin/product/';
             $image_url=$upload_path.$image_full_name;
             $success = $image->move($upload_path,$image_full_name);
             $Product->images=$image_url;
             $Product->save();
            return redirect('products');
       // return redirect('allcreate.skills');


       }else{
         $Product->save();
         return redirect('products');
         //return redirect('allcreate.skills');
       }




     //   return redirect('products');
    }

    public function productsadd(Request $data)
    {
        //
       // echo "ok";
       // echo $data->unit_id;
        // print_r($data);
       //  die();
 //return response()->json($data);
 //die();
        $Product = new Product;
        $Product->name=$data->name;
        $Product->description=$data->description;
        $Product->categories_id=$data->categories_id;
        $Product->subcategories_id=$data->subcategories_id;      
        $Product->unit_id=$data->unit_id;
        $Product->brand_id=$data->brand_id;       
        $Product->sku=$data->sku;
        $Product->barcode=$data->barcode;
      //  $Product->images=$data->images;
        $Product->save();

        $image=$data->file('images');
        //return response()->json($data);
       if($image){

             $image_name=hexdec(uniqid());
             $ext =strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/admin/product/';
             $image_url=$upload_path.$image_full_name;
             $success = $image->move($upload_path,$image_full_name);
             $Product->images=$image_url;
             $Product->save();
             return redirect()->back()->with('success', 'Product added to cart successfully!');
       // return redirect('allcreate.skills');


       }else{
         $Product->save();
         return redirect()->back()->with('success', 'Product added to cart successfully!');
         //return redirect('allcreate.skills');
       }




     //   return redirect('products');
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


    public function destroy($id)
    {
        //
    }
}
