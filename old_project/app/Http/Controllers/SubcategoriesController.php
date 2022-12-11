<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Subcategorie;

//images upload
use Illuminate\Http\UploadedFile;
class SubcategoriesController extends Controller
{
    public function index()
    {
        // echo "index";
         //
         $user = Subcategorie::all();
        // print_r($user);
         return view('sales_marketing.products.sub_categories.index',compact('user'));

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
