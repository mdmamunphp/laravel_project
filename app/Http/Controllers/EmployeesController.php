<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

//images upload
use Illuminate\Http\UploadedFile;

use App\Sellinvoice;
use App\Product;
use App\Branche;
use App\Customer;
use App\Sale;

class EmployeesController extends Controller
{
   
    public function index()
    {
        //
        return view('hr.employees.employees.index');


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
