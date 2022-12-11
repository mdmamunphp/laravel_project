@extends('admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sales Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Sales Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                {{-- <i class="fas fa-minus"></i></button>   <button type="submit" style="margin-top: 15%" id="btn" class="btn btn-success">send</button> --}}
            </button>
            </div>
          </div>
          {{-- <form action="{{ url('purchases/purchasedd') }}" method="POST" id="createForm"> --}}
            {{-- <form id="createForm"> --}}


                <form action="{{ url('sales/salesadd') }}" method="POST" >
                    @csrf
              @method('post')

            <div class="card-body row" id="rowAdd">

                <div class="form-group col-sm-6">
                    <label for="sales_date">sales date</label>
                    <input type="date" id="sales_date" name="sales_date" value="{{ session('sales_date') }}"class="form-control">
                </div>


                <div class="form-group col-sm-6">
                <label for="invoice">invoice id</label>
                <input type="text" id="invoice" name="invoice_id" value="{{ session('invoice_id') }}" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                    <label for="branche_id">branche Name</label>

                    <select class="form-control custom-select" name="branche_id"  id="branche_id">
                    <option selected disabled>Select one</option>
                    @isset($branche)
                    @foreach($branche as $key => $branch)
                    <option <?php if($branch->id==session('branche_id')){ echo "selected";}?> value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach

                    @endisset

                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label for="customer_id">customer Name</label>

                    <select class="form-control custom-select" name="customer_id" id="customer_id">
                    <option selected disabled>Select one</option>
                    @isset($customer)
                    @foreach($customer as $key => $cus)
                    <option  <?php if($cus->id==session('customer_id')){ echo "selected";}?>  value="{{ $cus->id }}">{{ $cus->name }}</option>
                    @endforeach

                    @endisset

                    </select>
                </div>


            <table class="table">

                <tr>
                    <td>

                        <label for="pro_name">product Name</label>

                        <select class="form-control custom-select"  name="product_id" id="pro_name">
                          <option selected disabled>Select one</option>
                          @isset($product)
                          @foreach($product as $key => $pro)
                          <option  size="2"value="{{ $pro->id }}">{{ $pro->name }}</option>
                          @endforeach

                          @endisset

                        </select>

                  </td>
                  <td>

                    <label for="qty">quantity</label>
                    <input type="text" id="qty" size="2" name="quantity"class="form-control">

                  </td>
                  <td>

                      <label for="sales_price">sales price</label>
                      <input type="text" id="sales_price" size="2" name="sales_price"class="form-control">

                  </td>


                  <td>

                        {{-- <a src="{{ url('products/add-to-sales/'.$product->id) }}"><button type="button"  value="add row" id="formRow"style="margin-top: 15%" class="btn btn-success">add</button></a> --}}
                        <button type="submit"    style="margin-top: 15%" class="btn btn-success">add</button>


                  </td>
                </tr>
            </form>
            </table>
          </div>

        </div>

        <div class="col-sm-12 row">

          <div class="col-sm-6">

          <table class="table">
              <tr>
                  <th>name</th>
                  <th>quantity</th>
                  <th>price</th>
                  <th>amount</th>
                  {{-- <td>{{ $cat['price'] }}</td> --}}
                  <th>action</td>
              </tr>


                  @if(session('sales'))
                  <?php $total = 0 ?>
                  @foreach(session('sales') as $id => $cat)



                  <?php $total +=$cat['price'] * $cat['quantity'];


                  ;?>





                      <td>{{ $cat['name'] }}</td>
                      <td><input type="text" size="5"name="txtQty" value="{{ $cat['quantity'] }}" /></td>
                      <td><input type="text" size="5" name="txtPrice" value="{{ $cat['price'] }}" /></td>
                      <td><input type="text" size="5" value="{{ $cat['price']*$cat['quantity'] }}" /></td>
                      {{-- <td>{{ $cat['price'] }}</td> --}}
                      <td>
                      {{-- <form  action="sales/{{ $id }}"method="post"  class="btn btn-danger">
                          @csrf
                          @method('delete')

                          <input type="hidden" name="product_id" class="re_id" value="{{$id}}" />
                          <button class="fas fa-trash btn-danger"   class="remove-from-sales"style="border:none;" type="submit" ></button>
                      </form> | update</td> --}}
                  </tr>



                  @endforeach


                  @endif



          </table>
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">

            <form action="{{url('sales/store')}}" method="POST">
                @csrf
            <div class="card-body">
                <table  class="table">


                    <tr>
                          <td>
                              <label for="sub_total">sub total </label>
                          </td>
                          <td>


                              @isset($total)
                              <input type="text" id="sub_total" name="sub_total" value="{{  $total }}" class="form-control">

                                @endisset

                                @empty($total)
                                <input type="text" id="sub_total" name="sub_total" value="" class="form-control">
                                @endempty

                          </td>
                    </tr>
                    <tr>
                          <td>
                              <label for="discount">discount</label>
                          </td>
                          <td>
                                <input type="text" id="discount" name="discount" class="form-control">
                           </td>
                  </tr>
                  <tr>
                          <td>
                               <label for="grand">grand total</label>
                          </td>
                           <td>
                              <input type="text" id="grand" class="form-control">
                          </td>
                  </tr>
                  <tr>
                          <td>
                            <label for="due">due amount</label>

                          </td>
                          <td>
                             <input type="text" id="due"name="due_amount" class="form-control">
                          </td>

                  </tr>
                  <tr>
                          <td>
                                <label for="paid">paid amount</label>
                          </td>
                           <td>
                             <input type="text" id="paid" name="paid_amount"class="form-control">
                          </td>

                  </tr>

                </table>

            </div>
            <button type="submit" style="margin-top: 15%" id="btn" class="btn btn-success">send</button>
            <!-- /.card-body -->
        </form>
          </div>
          <!-- /.card -->
        </div>
      <div>


          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

    </div>
    {{-- <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create new Porject" class="btn btn-success float-right">
      </div>
    </div> --}}
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
{{-- <script type="text/javascript">
    $(function() {
        $('#formRow').click(function() {
            alert("test");
        });
    });
</script> --}}
<script type="text/javascript">

    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        {{-- $('#formRow').click(function() {
            alert("test");
        }); --}}



        $("#formRow").click(function(){

            $("#rowAdd").append('<div class="form-group col-sm-3"><label for="pro">product Name</label><select class="form-control custom-select" id="pro"><option selected disabled>Select one</option>@isset($product)  @foreach($product as $key => $pro)<option id="{{ $pro->id }}">{{ $pro->name }}</option>@endforeach   @endisset     </select></div><div class="form-group col-sm-3"><label for="product">product price</label><input type="text" id="product" class="form-control"></div>   <div class="form-group col-sm-3"><label for="quant">quantity</label><input type="text" id="quant" class="form-control"></div><div class="form-group col-sm-3"><button type="button"  value="add row" id="formRow"style="margin-top: 15%" class="btn btn-success">add </button></div>')


          });






    $('#createForm').submit(function(e){

        e.preventDefault();


            var customer = $("#customer_id").val();
            var sdate = $("#sales_date").val();

            var branche = $("#branche_id").val();

            var invoice = $("#invoice").val();
            var due = $("#due").val();
            var paid = $("#paid").val();

            var discount = $("#discount").val();
            var sub_total = $("#sub_total").val();






            console.log(paid);
            console.log(supplier);



                    $.ajax({
                        url: '{{ url('purchases/store') }}',
                        method: 'post',
                        data:{customer:customer, sdate:sdate,branche:branche,invoice:invoice,paid:paid,due:due,discount:discount,sub_total:sub_total},
                        dataType: "json",
                        success:function(data){

                        console.log(data);

                        //  alert(data.success);


                        },
                    error: function(error){
                        console.log('not ok');
                        {{-- alert(data.error);
                        location.reload(); --}}

                    }
                    })





    })
    })
    </script>

















<!-- /modal -->

@endsection
