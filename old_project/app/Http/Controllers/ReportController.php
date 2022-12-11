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
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $purchases=DB::SELECT('select sum(pd.quantity) total,product_id,p.name name from purchases_details pd,products p where pd.product_id=p.id group by product_id,p.name');
      //  $sales=DB::SELECT('select sum(pd.quantity) stotal,product_id pid from sales_details pd,products p where pd.product_id=p.id group by product_id');

        $sales=DB::select('select * from products');


        return view('report.stock_report.index',compact('sales'));
    }

    public function pro_wise_purchase()
    {


       $purchase_detail=DB::SELECT("select sum(pd.quantity) total,pd.purchase_price price,p.name name,p.id pid from purchases_details pd,products p where pd.product_id=p.id group by pd.product_id,pd.purchase_price,p.name,p.id");


        return view('report.purchase_report.product_wise_purchases.index',compact('purchase_detail'));



    }

    public function branch_wise_purchases($id){

       // echo $id;
        $purchase=DB::select("select p.invoice_id,p.purchase_date,p.sub_total,pro.name pname from purchases p,purchases_details pd,products pro where p.branche_id ='$id' and  p.id=pd.purchases_id and pd.product_id=pro.id");
        $amount=DB::select("select MONTHNAME(created_at) mname,sum(sub_total) total FROM purchases where branche_id='$id' group by month(created_at),mname");
        return view('report.branch_wise_report.branch_wise_details',compact('purchase','amount'));

    }

    
    public function branch_wise_sales($id){
 
     //  echo $id;

        $sales=DB::select("select * from sales where branche_id ='$id'");
        return view('report.branch_wise_report.branch_wise_details',compact('sales'));

    }

    public function branch_wise_stock($id){


        $data=$id;
      //  echo $id;
       //   $purchase=DB::select("select p.invoice_id,p.purchase_date,p.sub_total,pro.name pname from purchases p,purchases_details pd,products pro where p.branche_id ='$id' and  p.id=pd.purchases_id and pd.product_id=pro.id");
      //    $sales=DB::select("select * from sales where branche_id ='$id'");
          $stock=DB::select("select * from products");
        return view('report.branch_wise_report.branch_wise_details',compact('stock','data'));


    }


    public function branch_wise_report(){

        $branche = Branche::all();

        return view('report.branch_wise_report.index',compact('branche'));
    }
    public function pro_wise_sales()
    {


       $sales_detail=DB::SELECT("select sum(sd.quantity) total,sd.sales_price price,p.name name,p.id pid from sales_details sd,products p where sd.product_id=p.id group by sd.product_id,sd.sales_price,p.name,p.id");


        return view('report.sales_report.product_wise_sales.index',compact('sales_detail'));

    }
    public function pro_quantity()
    {


       $purchase_detail=DB::SELECT("select sum(pd.quantity) total,pd.purchase_price price,p.name name,p.id pid from purchases_details pd,products p where pd.product_id=p.id group by pd.product_id,pd.purchase_price,p.name,p.id");


        return view('report.purchase_report.product_wise_purchases.index',compact('purchase_detail'));

    }
    public function sales_quantity()
    {


       $sales_detail=DB::SELECT("select sum(sd.quantity) total,sd.sales_price price,p.name name,p.id pid from sales_details sd,products p where sd.product_id=p.id group by sd.product_id,sd.sales_price,p.name,p.id");


        return view('report.sales_report.product_wise_sales.index',compact('sales_detail'));

    }


  public function all_sales()
    {

        $sales_detail=DB::SELECT("select sum(sd.quantity) total,sd.sales_price price,p.name name,p.id pid from sales_details sd,products p where sd.product_id=p.id group by sd.product_id,sd.sales_price,p.name,p.id");



        return view('report.sales_report.all_sales.index',compact('sales_detail'));

    }


  public function all_purchase()
  {

      $sales_detail=DB::SELECT("select sum(sd.quantity) total,sd.sales_price price,p.name name,p.id pid from sales_details sd,products p where sd.product_id=p.id group by sd.product_id,sd.sales_price,p.name,p.id");



      return view('report.sales_report.all_sales.index',compact('sales_detail'));

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
