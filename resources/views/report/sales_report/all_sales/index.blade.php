@extends('admin.master')
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All sales</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">all_sales</li>

          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
            <span> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">add</button></span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Product Id
                     </th>
                    <th>
                       Product name
                    </th>

                    <th>
                        quantity
                    </th>
                    <th>
                        price
                    </th>

                  <th>total amount</th>

                      {{--  <th>sub total</th>
                    <th>discount</th>
                    <th>grand total</th>
                    <th>paid amount</th>
                    <th>due amount</th>  --}}


                </tr>



            </thead>
            <tbody>
                <tr>

                    @isset($sales_detail)


                    @foreach($sales_detail as $value)
                  <tr>
                    <td>{{ $value->pid }}</td>
                    <td>{{ $value->name }}</td>

                    <td>
                        <?php $s=sales_qty($value->pid);

                      // print_r($s);
                      //echo $s;
                       echo $s[0]->total;
                        ?>
                    </td>
                     <td>{{ $value->price }}</td>
                     <td>{{ $value->price*$value->total }}</td>
                    {{-- <td>{{ $value->purchase_date }}</td>
                    <td>{{ $value->sub_total }}</td>
                    <td>{{ $value->discount }}</td>
                    <td>{{ $value->sub_total-$value->discount }}</td>
                    <td>{{ $value->paid_amount }}</td>  --}}
                    {{-- <td>{{ $value->paid_amount }}</td> --}}
                    {{--  <td>{{ $value->due_amount }}</td>  --}}


                  </tr>
                  @endforeach
                  @endisset





            </tbody>
        </table>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->





@endsection
