@extends('admin.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Simple Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Simple Tables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">

              <h3 class="card-title">Responsive Hover Table</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <span> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">add</button></span> <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">

              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                    @isset($user)


                    @foreach($user as $value)


                  <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>
                        <a href="">view</a>
                        <a href="">edit</a>
                        <a href="">delete</a>

                    </td>

                  </tr>
                  @endforeach
                  @endisset
                  {{-- <tr>
                    <td>219</td>
                    <td>Alexander Pierce</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-warning">Pending</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>657</td>
                    <td>Bob Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-primary">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>175</td>
                    <td>Mike Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-danger">Denied</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->




<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Product add</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- input states -->
                    <div class="form-group">
                      <label class="col-form-label" for="inputSuccess"> name</label>
                      <input type="text" class="form-control" id="inputSuccess" name="name" placeholder="product name">
                    </div>
                    <div class="form-group">
                      <label class="col-form-label" for="inputWarning"> description</label>
                        <textarea class="form-control" rows="3" name="description" placeholder="product description"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- select -->
                          <div class="form-group">
                            <label>category</label>
                            <select class="form-control" name="categories_id">
                                @isset($cat)
                                @foreach($cat as $ca)
                                <option id="{{ $ca->id }}" value="{{ $ca->id }}">{{ $ca->name }}</option>
                                @endforeach

                                @endisset
                              {{-- <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option> --}}
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>subcategory</label>
                            <select class="form-control" name="subcategories_id">
                                @isset($sub)
                                @foreach($sub as $su)
                                <option id="{{ $su->id }}" value="{{ $su->id }}">{{ $su->name }}</option>
                                @endforeach

                                @endisset
                              {{-- <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option> --}}
                            </select>
                          </div>
                        </div>
                        
                         
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- select -->
                          <div class="form-group">
                            <label for="customFile">Custom File</label>

                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="images" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label>unit</label>
                              <select class="form-control" name="unit_id">
                                <option>select unit</option>
                                @isset($unit)
                                @foreach($unit as $uni)
                                <option id="{{ $uni->id }}" value="{{ $uni->id }}">{{ $uni->name }}</option>
                                @endforeach

                                @endisset
                                {{-- <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option> --}}
                              </select>
                            </div>
                          </div>
                    </div>



                  <div class="row">
                   
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                          <label class="col-form-label" for="inputSuccess"> SKU</label>
                          <input type="text" class="form-control" name="sku" id="inputSuccess" placeholder="Enter SKU">
                        </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label class="col-form-label" for="inputSuccess"> Barcode</label>
                              <input type="text" class="form-control" name="barcode"id="inputSuccess" placeholder="Enter Barcode">
                            </div>
                      </div>                      
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="submit">

                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->



        {{-- <form action="{{ route('units.store') }}" method="post">
            @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" name="name"class="form-control" id="recipient-name">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="submit">
            {{-- <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </form> --}}
      </div>

    </div>
  </div>
</div>

<!-- /modal -->

@endsection
