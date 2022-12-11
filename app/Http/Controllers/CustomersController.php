<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Customer;

//images upload
use Illuminate\Http\UploadedFile;
class CustomersController extends Controller
{

    public function index()
    {
        //
        $user = Customer::all();
        return view("hr.crm.customers.index",compact('user'));
    }

    public function contacts()
    {
        //

        $user = Customer::all();
        return view("contacts.customer.index",compact('user'));
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
