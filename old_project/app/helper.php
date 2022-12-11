<?php

// if(!function_exists('weekdays')) {
//   function weekdays() {
//     return [
//       'Mon' => 'Monday',
//       'Tus' => 'Tuesday',
//       'Wed' => 'Wednesday',
//       'Thu' => 'Thursday',
//       'Fri' => 'Friday',
//       'Sat' => 'Saturday',
//       'Sun' => 'Sunday'
//     ];
//   }
// }

    function UserActivity($activity)

{
   date_default_timezone_set("Asia/Dhaka");
    $browser = Request::header('user-agent');
    $ip=$_SERVER['REMOTE_ADDR'];
    $user_id = session('ses_id');
    $session_id = session('ses_session_id');
   $data = [
      'user_id'=> $user_id ,
      'activity'=> $activity ,
      'session_id'=> $session_id ,
      'activity_datetime'=> now(),
      'ip'=> $ip,
      'browser'=> $browser
   ];

    DB::table('activity_log')->insert($data);


}

function purchase_qty($id){

    $purchase_detail=DB::SELECT("select sum(pd.quantity) total from purchases_details pd where pd.product_id='$id' group by pd.product_id");
    return  $purchase_detail;
}

function purchase_report_qty($id){

    $sales_report_qty=DB::SELECT("select sum(pd.quantity) pqty,b.name bname from branches b,purchases p,purchases_details pd where b.id='$id' and b.id=p.branche_id and p.id=pd.purchases_id group by b.name");
 //  echo  $sales_report_qty[0]->pqty;
   // print_r($sales_report_qty);
   // die();
    //$value=$sales_report_qty[0]->pqty;
    
   // return  $sales_report_qty;
                if(!empty($sales_report_qty)){
            
                    return  $sales_report_qty;
            }else{
            return false;
            }
            }

        function sales_report_qty($id){

            $sales_report_qty=DB::SELECT("select sum(sd.quantity) sqty,b.name bname from branches b,sales s,sales_details sd where b.id='$id' and b.id=s.branche_id and s.id=sd.sales_id group by b.name");
            //  echo  $sales_report_qty[0]->pqty;
           //  print_r($sales_report_qty);
           //  die();
            //$value=$sales_report_qty[0]->pqty;
            
            // return  $sales_report_qty;
                        if(!empty($sales_report_qty)){
                    
                           
                           return  $sales_report_qty;
                    }else{
                        return false;
                    }
         }



        function sales_qty($id){

            $purchase_detail=DB::SELECT("select sum(sd.quantity) total,sd.product_id pid from sales_details sd where sd.product_id=$id group by sd.product_id");

            if($purchase_detail ==0){
                return  'value';
            }else{
                return  $purchase_detail;
            }

        }

    //     function date_wise_sales($id){

            
    //        // $sales=DB::select("select * from sales where sales_date='$id' group by sales_date");
    //     //   $sales=DB::SELECT("select sum(sd.sales_price) sprice FROM sales_details sd,sales s where s.id=$data and sd.sales_id=s.id group by s.invoice_id");
    //         $sales=DB::SELECT("select sum(sub_total) stotal,sales_date from sales where sales_date='$id' group by sales_date ");

    //    //   print_r($sales);
    //    //   die();

    //         return  $sales;
    //     }

    function branch_sale_qty($bid,$pid){


    $sales=DB::select("SELECT sum(sd.quantity) sqty FROM sales s,sales_details sd ,products p where branche_id=$bid and sd.sales_id=s.id and p.id=$pid and p.id=product_id group by product_id");

    if(!empty($sales)){
                        
                            
                            return  $sales;
                        }else{
                            return 0;
                        }


    }


    function branch_purchase_qty($bid,$pid){


    $purchase=DB::select("SELECT sum(pd.quantity) pqty FROM purchases p,purchases_details pd,products pro where p.branche_id=$bid and p.id=pd.purchases_id and pro.id=$pid and pro.id=pd.product_id group by pd.product_id");

    if(!empty($purchase)){
                        
                            
                            return  $purchase;
                        }else{
                            return 0;
                        }


    }