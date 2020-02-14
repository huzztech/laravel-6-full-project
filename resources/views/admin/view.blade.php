@extends('layouts.admin')
@section('title', 'View Projects')


@section('specificpagecontent')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <section class="content">
      
	<div class="container-fluid">

	<div class="row">

    <div class="col-12">

        <div class="card">
          
          @if (session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

              <!--<div class="card-header">
                &nbsp;
              </div> -->
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>

                <tr>                          
                 <th >Code</th>
                 <th>Date</th>
                  <th>Customer </th>
                  <th>Origin </th>
                  <th>Status </th>
                </tr>
                  </thead>
                  <tbody>

                @foreach($programs as $program)

                @php

                  $subcode_number = $program->subcode_number;

                  $wid              = $program->wid;
                  $seller_id        = $program->seller_id;
                  $unit             = $program->unit;
                  $code             = $program->code;
                  $sub_code         = $program->sub_code;
                  $construction     = $program->construction;
                  $fabric_type      = $program->fabric_type;
                  $change_by        = $program->change_by;
                  $on_update        = $program->on_update;
                  $ent_date         = $program->ent_date;
                  
                  $customer         = $program->customer;
                  
                  $warp_count       = $program->warp_count;
                  $warp_yarn_type   = $program->warp_yarn_type;
                  $warp_yarn_blend  = $program->warp_yarn_blend;
                  
                  $weft1_count      = $program->weft1_count;
                  $weft1_yarn_type  = $program->weft1_yarn_type;
                  $weft1_yarn_blend = $program->weft1_yarn_blend;
                  
                  $weft2_count      = $program->weft2_count;
                  $weft2_yarn_type  = $program->weft2_yarn_type;
                  $weft2_yarn_blend = $program->weft2_yarn_blend;
                  
                  $weft3_count      = $program->weft3_count;
                  $weft3_yarn_type  = $program->weft3_yarn_type;
                  $weft3_yarn_blend = $program->weft3_yarn_blend;
                  
                  $weft4_count      = $program->weft4_count;
                  $weft4_yarn_type  = $program->weft4_yarn_type;
                  $weft4_yarn_blend = $program->weft4_yarn_blend;
                  
                  $w_end            = $program->w_end;
                  $w_pick           = $program->w_pick;
                  $w_width          = $program->w_width;
                  $w_fabric_type    = $program->w_fabric_type;
                  $w_selvedge       = $program->w_selvedge;
                  $w_writing        = $program->w_writing;
                  $subcode_number   = $program->subcode_number;
                  $mastercode       = $program->mastercode;
                  
                  $w_writing_val    = $program->w_writing_val;
                  $w_writing_val    = str_replace("  ", " &nbsp; ", $w_writing_val);
                  
                  $remarks          = $program->remarks;
                  $status           = $program->status;
                  
                  $levelcode        = $program->levelcode;
                  
                  $order_quantity   = $program->order_quantity;
                  $design_status_date = $program->design_status_date;
                  
                  $waiting_time     = $program->waiting_time;
                  $waiting_time     = $design_status_date;
                  
                  $etm_code         = $program->etm_code;                  

                  $encoded_id       = Hashids::encode($wid);


                  if($w_writing_val != "")
                  {
                    $w_writing = "- ".$w_writing_val;
                  }
                  else
                  {
                    $w_writing = "";
                  }
                  
                  
                  if($weft2_count != "")
                  {
                    $weft1_count = $weft1_count."+";
                  }
                  if($weft3_count != "")
                  {
                    $weft2_count = $weft2_count."+";
                  }
                  if($weft4_count != "")
                  {
                    $weft3_count = $weft3_count."+";
                  }
                  if($remarks != "")
                  {
                    $remarks = "- ".$remarks;
                    $remarks = "";
                  }


                  $imgurl    = "../img/products/";          
                 
                  
                  //$bgcolor = "";


                  /*************Set code***************/
          
                  if($subcode_number != "0")
                  {
                    $code_set     = substr($code,0, -2);
                    $etm_code_set = substr($etm_code,0, -2);
                  }
                  else
                  {

                    $code_set     = $code;
                    $etm_code_set = $etm_code;
                  }



                  $q_total = \App\Program::whereRaw("(code = '$code' or mastercode = '$code') and thisonetoshow = 'yes'")->get();
                  $numRows_total = $q_total->count();

                  $q_out = \App\Program::whereRaw("(code = '$code' or mastercode = '$code')  and thisonetoshow = 'yes' and (status != 'Pending' and status != 'Waiting' and status != 'Cancelled')")->get();
                  $numRows_out = $q_out->count();


                  if($numRows_total == 1)
                  {

                    $further_path = "home/program/single/".$encoded_id;
                  }
                  else
                  {
                    $further_path = "home/program/multiple/".$encoded_id;
                  }
                  


                @endphp

                    
                <tr>                          
                 <td><a style="color: black;" href='{{url("$further_path")}}'>{{$code_set}}</a></td>
                 <td>{{ \Carbon\Carbon::parse($program->set_date)->format('d-M-y')}}</td>
                  <td>{{$program->company_fun['name']}} </td>
                  <td>{{$program->unit_fun['name']}} </td>
                  <td>{{$status}}</td>
                 </tr>

                @endforeach

                  </tbody>
                </table>

                {{ $programs->links() }}
                
              </div>
              <!-- /.card-body -->
            </div>

            </div>

 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



@endsection