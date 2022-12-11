
@extends('admin.master')
@section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Branch Wise Stock Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
     @isset($purchase)
       
    
        <div class="col-md-6">
          
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">PURCHASE REPORT</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>INVOOICE ID</th>
                    <th>PRODUCT NAME</th>
                    <th>PURCHASE DATE</th>
                     <th>SUB TOTAL</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($purchase as $value)
                  
               

                  <tr>
                    <td>{{$value->invoice_id}}</td>
                    <td>{{$value->pname}}</td>
                      <td>{{$value->purchase_date}}</td>
                    <td>{{$value->sub_total}}</td>
                    {{-- <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td> --}}
                  </tr>
                   @endforeach
                  
                  
                 

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
  <div class="col-md-6">
          
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">PURCHASE REPORT</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Month Name</th>
                    <th>amount</th>
                    {{-- <th>PURCHASE DATE</th>
                     <th>SUB TOTAL</th>
                    <th>ACTION</th> --}}
                  </tr>
                </thead>
                <tbody>
                {{-- <?php $month=DB::select("select MONTHNAME('created_at') mname,sum(sub_total) total FROM purchases where branche_id=2 group by month('created_at')"); print_r($month);?> --}}
                @foreach($amount as $value)
                  
               

                  <tr>
                    <td>{{$value->mname}}</td>
                      <td>{{$value->total}}</td>
                      <td></td>
                    {{-- <td>{{$value->pname}}</td>
                      <td>{{$value->purchase_date}}</td>
                    <td>{{$value->sub_total}}</td> --}}
                    {{-- <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td> --}}
                  </tr>
                   @endforeach
                  
                  
                 

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
 @endisset

@isset($sales)

       <div class="col-md-6">
          
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">SALES REPORT</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                 <tr>
                    <th>INVOOICE ID</th>
                    <th>PRODUCT NAME</th>
                    <th>SALES DATE</th>
                     <th>SUB TOTAL</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
  @foreach ($sales as $value)
      

                  <tr>
                    <td>{{$value->invoice_id}}</td>
                    <td>49.8005 kb</td>
                      <td>{{$value->sales_date}}</td>
                    <td>{{$value->sub_total}}</td>
                    {{-- <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td> --}}
                  </tr>
                    @endforeach
                  

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
            
@endisset


@isset($stock)

       <div class="col-md-6">
          
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">STOCK REPORT</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>purchases qty</th>
                    <th>sales qty</th>
                       <th>stock</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
              @foreach ($stock as $value)
                  <?php $qty=branch_sale_qty($data,$value->id); ?>
                   <?php $pqty=branch_purchase_qty($data,$value->id); 
                   
                   
                   ?>
           
                  <tr>
                   <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td><?php if(!empty($pqty) ){
                        $p_qty=0;
                       $p_qty +=$pqty[0]->pqty;
                            echo $pqty[0]->pqty;
                      }else{
                        echo 0;
                      } ?>
                    </td>
                    <td><?php if(!empty($qty) ){
                       $sale_qty=0;
                       $sale_qty +=$qty[0]->sqty;
                            echo $qty[0]->sqty;
                      }else{
                        echo 0;
                      } ?></td>

                       <td>
                       <?php 

                            if(!empty($pqty) && !empty($qty)){
                                  $p=$pqty[0]->pqty;
                                  $s=$qty[0]->sqty;
                               echo  $p-$s;
                                //echo "ok";
                      }elseif (!empty($pqty)){

                        echo $pqty[0]->pqty;

                      }else{
                        echo 0;
                      } ?>

                   
                   
                      </td>
              
                    {{-- <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td> --}}
                  </tr>
               @endforeach
                  

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
            
@endisset



    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




@endsection



















