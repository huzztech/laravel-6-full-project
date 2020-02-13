@extends('layouts.admin')
@section('title', 'Profile')


@section('specificpagecontent')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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


	<div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="profile_img">
                        <div id="crop-avatar">
                         
                          <img class="img-responsive avatar-view" src="{{url('img/user.png')}}" alt="Avatar" title="Logo" style="border: 1px solid; padding: 10px;">
                        </div>
                      </div>
						
                    </div>



     				<div class="col-md-9 col-sm-9 col-xs-12">
					
                        
                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
								
                              <tbody>
                                
                               <tr>
                                  <td width="25%"><strong>Name:</strong></td>
                                  <td width="75%">{{Auth::user()->name}}</td>
                                </tr>
								
									
								<tr>
                                <td width="25%"><strong>Email Address:</strong></td>
                                  <td width="75%">{{Auth::user()->email}}</td>
                                </tr>
                                                              
                              <tr>
                                  <td width="25%"><strong>D.O.B:</strong></td>
                                  <td width="75%">{{ Auth::user()->dob->formatLocalized('%d %B %Y') }}</td>
                                </tr>
                                                               
                              </tbody>
                            </table>
							  
                           
                            
                    </div>

 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



@endsection