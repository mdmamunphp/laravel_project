<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Unit;

//images upload
use Illuminate\Http\UploadedFile;
class UnitsController extends Controller
{

    public function index()
    {
        // echo "index";
         //
         $user =  Unit::all();
        // print_r($user);
         return view('sales_marketing.products.units.index',compact('user'));
     }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
      echo  $request->name;
     return redirect("units");
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
