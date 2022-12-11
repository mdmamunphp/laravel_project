<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;






namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\categorie;
use App\Product;
//images upload
use Illuminate\Http\UploadedFile;





class BlogController extends Controller
{
   
    public function index()
    {
        //

        $user = Product::all();

        return  response()->json($user);
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
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
