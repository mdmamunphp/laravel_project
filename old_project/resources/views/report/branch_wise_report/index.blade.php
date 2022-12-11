
@extends('admin.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Branche Wise Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Branche wise report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        {{-- <h5 class="mb-2">Info Box</h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Messages</span>
                <span class="info-box-number">1,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bookmarks</span>
                <span class="info-box-number">410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uploads</span>
                <span class="info-box-number">13,648</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">93,139</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div> --}}
        <!-- /.row -->

     

     

        <!-- =========================================================== -->

        <!-- Small Box (Stat card) -->
        {{-- <h5 class="mb-2 mt-4">Small Box</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div> --}}
        <!-- /.row -->

       

        <!-- =========================================================== -->
    


     


        <!-- =========================================================== -->


        {{-- <h3 class="mt-4 mb-4">Social Widgets</h3> --}}

        <div class="row">
         
         


               @isset($branche)


                @foreach($branche as $value)
          <div class="col-md-4">
     
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url({{asset('public/backend/asset/dist/img/photo1.png')}}) center center;">
                <h3 class="widget-user-username text-right">{{ $value->name }}</h3>
                {{-- <h5 class="widget-user-desc text-right">Web Designer</h5> --}}
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset('public/backend/asset/dist/img/user1-128x128.jpg')}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                   <a href="{{ URL::to('branch_wise_sales/'.$value->id) }}" style="color: #0f0505">
                    <div class="description-block">
                      <h5 class="description-header">
                      <?php $qty=sales_report_qty($value->id);
                      if(!empty($qty) ){
                        $sale_qty=$qty[0]->sqty;
                            echo $qty[0]->sqty;
                      }else{
                        echo 0;
                      }
                     ?>
                      
                      </h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                    </a>
                  </div>
                  <!-- /.col -->
                   <a href="{{ URL::to('branch_wise_purchases/'.$value->id) }}" style="color: #0f0505">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?php $pqty=purchase_report_qty($value->id);
                      if(!empty($pqty) ){
                        $pro_qty=$pqty[0]->pqty;
                            echo $pqty[0]->pqty;
                      }else{
                        echo 0;
                      }
                     ?>
                      </h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                      </a>
                  </div>
                
                  <!-- /.col -->
                   <a href="{{ URL::to('branch_wise_stock/'.$value->id) }}" style="color: #0f0505">
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header"><?php echo  $pro_qty-$sale_qty; ?></h5>
                      <span class="description-text">STOCK</span>
                    </div>
                    <!-- /.description-block -->
                     </a>
                  </div>
                 
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
         
          </div>
          <!-- /.col -->
            @endforeach
              @endisset
        </div> 
        <!-- /.row -->

    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->

  @endsection