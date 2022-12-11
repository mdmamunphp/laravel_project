@extends('admin.master')
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>payment to supplier</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">payment_to_supplier</li>

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
                        Invoice Id
                    </th>

                    <th>
                        Branch
                    </th>
                    <th>
                        supplier_id
                    </th>
                    <th>purchase date</th>

                    <th>sub total</th>
                    <th>discount</th>
                    <th>grand total</th>
                    <th>paid amount</th>
                    <th>due amount</th>

                    <th>
                        Action
                    </th>
                </tr>



            </thead>
            <tbody>
                <tr>

                    @isset($purchase)


                    @foreach($purchase as $value)
                  <tr>
                    <td>{{ $value->invoice_id }}</td>

                    <td>{{ $value->branche_id }}</td>
                    <td>{{ $value->supplier_id }}</td>
                    <td>{{ $value->purchase_date }}</td>
                    <td>{{ $value->sub_total }}</td>
                    <td>{{ $value->discount }}</td>
                    <td>{{ $value->sub_total-$value->discount }}</td>
                    <td>{{ $value->paid_amount }}</td>
                    {{-- <td>{{ $value->paid_amount }}</td> --}}
                    <td>{{ $value->due_amount }}</td>
                    <td class="project-actions">
                      <form action="{{ url('payment_to_supplier/update') }}" class="" method="POST">
                        @csrf
                        <input type="hidden" name="due" value="{{ $value->due_amount-$value->due_amount }}">
                        <input type="hidden" name="paid" value="{{ $value->paid_amount+$value->due_amount }}">
                        <input type="hidden" name="id" value="{{ $value->id }}">
                        <?php if($value->due_amount==0){?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">paid</button>
                        <?php }else{
                            ?>
                            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Pay Now</button>
                            <?php

                        }?>
                      </form>
                    </td>

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
