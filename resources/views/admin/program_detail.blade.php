@extends('layouts.admin')
@section('title', 'Project Detail')


@section('specificpagecontent')



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Project Detail ({{$programs->code}}) </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Project Detail</li>
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

  <div class="col-md-12">
            <!-- general form elements -->
              <!-- /.card-header -->
              <!-- form start -->

              <div class="card card-primary">
              <div class="card-header">
                <!--<h3 class="card-title">Quick Example</h3>-->
              </div>


              @if(count($errors) > 0)
        
                           
                @foreach($errors->all() as $error)
            
                <div class="alert alert-danger"> {{$error}} </div>
            
                @endforeach

                

                @endif

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



                    <div class="x_title" style="margin: 7px;">
                    
                    <h5 style="margin-right: 5px; width: 99%; margin-top: 0px;">                    
                  

                  <strong> Compay:</strong> {{$programs->company_fun['name']}} -
                  <strong> Origin:</strong> {{$programs->unit_fun['name']}}
                    
                       
                     <!--</div>-->   

                     <span style="float: right;"> {{ \Carbon\Carbon::parse($programs->set_date)->format('d-M-y')}} </span>

                     <a onclick="delmyprogram('{{Hashids::encode($programs->wid)}}', '{{$programs->code}}')" style="padding: 3px; float: right; margin-right: 10px; cursor: pointer; color: white;" class="btn btn-danger"> Delete </a>

                     <a href="{{url('/home/program/cancel/' . Hashids::encode($programs->wid))}}" class="btn btn-danger" name="cancelme" style="padding: 3px; float: right; margin-right: 10px;">Cancel</a>

                     <a href="{{url('/home/program/edit/' . Hashids::encode($programs->wid))}}" class="btn btn-info" name="editme" style="padding: 3px; float: right; margin-right: 10px;">Edit</a>
                                          
                     </h5>

                   
              </div>


              <table width="100%" border="1" style="text-align: center;">
            <tbody>
            <tr style="text-align: center;">
              <td style="padding-bottom: 10px;" width="10%">&nbsp;</td>
              <td style="padding-bottom: 10px;"><strong>Type</strong></td>
              <td style="padding-bottom: 10px;"><strong>Local / Foreign</strong></td>
              <td style="padding-bottom: 10px;"><strong>Language</strong></td>
            </tr>
            <tr>
              <td><strong>Website </strong></td>
              <td>
                        
              {{ $programs->warp_count }}

              </td>
              <td>              
              {{ $programs->warp_yarn_type }}
              </td>
              <td>              
              {{ $programs->warp_yarn_blend }}
              </td>
            </tr>
            
            @if($programs->weft1_count !== "" && $programs->weft1_yarn_type !== "" && $programs->weft1_yarn_blend !== "")
            

            <tr>
              <td><strong>Android </strong></td>
              <td>
              
              {{ $programs->weft1_count }}          
              </td>
              <td>              
             {{ $programs->weft1_yarn_type }}           
              </td>
              <td>              
              {{ $programs->weft1_yarn_blend }}         
              </td>
            </tr>
              
            @endif



            @if($programs->weft2_count !== "" && $programs->weft2_yarn_type !== "" && $programs->weft2_yarn_blend !== "")
            

            <tr>
              <td><strong>iOS</strong></td>
              <td>
              
              {{ $programs->weft2_count }}          
              </td>
              <td>              
             {{ $programs->weft2_yarn_type }}           
              </td>
              <td>              
              {{ $programs->weft2_yarn_blend }}         
              </td>
            </tr>
              
            @endif


            @if($programs->weft3_count !== "" && $programs->weft3_yarn_type !== "" && $programs->weft3_yarn_blend !== "")
            

            <tr>
              <td><strong>Online Software</strong></td>
              <td>
              
              {{ $programs->weft3_count }}          
              </td>
              <td>              
             {{ $programs->weft3_yarn_type }}           
              </td>
              <td>              
              {{ $programs->weft3_yarn_blend }}
              </td>
            </tr>
              
            @endif



            @if($programs->weft4_count !== "" && $programs->weft4_yarn_type !== "" && $programs->weft4_yarn_blend !== "")
            

            <tr>
              <td><strong>Desktop Software</strong></td>
              <td>
              
              {{ $programs->weft4_count }}
              </td>
              <td>
             {{ $programs->weft4_yarn_type }}
              </td>
              <td>
              {{ $programs->weft4_yarn_blend }}
              </td>
            </tr>
              
            @endif      
                        
            </tbody>
          </table>
            

            <div style="margin: 10px;"><strong>Remarks: </strong> {{$programs->remarks}}</div>

            <!-- /.card -->
            </div>

 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



@endsection