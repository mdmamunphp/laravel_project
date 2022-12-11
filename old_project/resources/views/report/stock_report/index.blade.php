@extends('admin.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Projects</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
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
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Project Name
                    </th>
                    <th style="width: 20%">
                        purchases quantity
                    </th>
                    <th style="width: 20%">
                        sales quantity
                    </th>

                    <th style="width: 8%" class="text-center">
                        current stock
                    </th>

                </tr>
            </thead>
            <tbody>
                @isset($sales)

            <?php $s=0; ?>
               @foreach($sales as $key => $value)


                <tr>
                    <td>
                        {{ $value->id}}
                    </td>
                    <td>
                       {{ $value->name}}
                    </td>

                    <td>@isset($value->id)


                        <?php


                        $pd=purchase_qty($value->id);

                        // print_r($sd);

                        $p=0;
                         foreach ($pd as $item){
                            $p=$item->total;
                            echo $item->total;

                            }


                          // echo $sd[0]->total;

                    ?>
                </td>
                    @endisset

                    <td>




                        <?php
                       $pid= $value->id;

                        $sd =sales_qty($value->id);

                       //  print_r($sd);





                     foreach ($sd as $item){
                            $s=$item->total;
                            $spid=$item->pid;
                            echo $item->total;
                           // echo $id;

                            }


                          // echo $sd[0]->total;



                    ?>
                </td>







                    <td class="project-state">

                       <?php
                       $t=$p-$s;
                        if(isset($spid)){
                         if ($spid == $pid) {
                         ?>
                          <span class="badge badge-success"><?php echo $p-$s;?>  </span>
                          <?php
                         } elseif($t==0 && $spid == $pid || $p==0){

                          ?>
                          <span class="badge badge-danger"><?php echo 0 ?>  </span>

                          <?php
                         }else{
                             ?>
                             <span class="badge badge-success"><?php echo $p ?>  </span>
                             <?php

                         }
                        }else{
                            ?>
                             <span class="badge badge-success"><?php echo $p ?>  </span>
                             <?php
                        }
                        ?>

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
