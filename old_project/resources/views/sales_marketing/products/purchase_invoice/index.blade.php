@extends('admin.master')
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Purchases Invoice</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Purchases Invoice</li>

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
                        <a class="btn btn-primary btn-sm" href="{{ url('purchaseinvoice/'.$value->id) }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
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
