<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HuzzTech - @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('public/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('public/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="get" action="{{url('home/program/search')}}">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!--<a href="#" class="dropdown-item">
             Message Start -->
          <!--  <div class="media">
              <img src="{{ asset('public/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End 
          </a>-->
         <!-- <div class="dropdown-divider"></div>-->
          <a href="#" class="dropdown-item">
            0
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">1</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">1 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{ asset('public/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HuzzTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/dist/img/profile11.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/home/profile/')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <?php      

                   $segment  = Request::segment(2);
                   $segment3 = Request::segment(3);

         ?>

          <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview
            @if($segment == 'profile')
              menu-open
              @endif">
            <a href="#" class="nav-link 
             @if($segment == 'profile')
              active
              @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/home/profile')}}" class="nav-link  
              @if($segment == 'profile' && $segment3 != 'edit')
              active
              @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/home/profile/edit')}}" class="nav-link  
              @if($segment3 == 'edit')
              active
              @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li> 



           <li class="nav-item has-treeview
            @if($segment == 'program')
              menu-open
              @endif">
            <a href="#" class="nav-link 
             @if($segment == 'program')
              active
              @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Project
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/home/program/add')}}" class="nav-link
              @if($segment == 'program' && $segment3 == 'add')
              active
              @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/home/program/view')}}" class="nav-link  
              @if($segment == 'program' && $segment3 == 'view')
              active
              @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-header">Action</li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  @yield('specificpagecontent')

  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} Developed by <a href="http://huzztech.com/">HuzzTech</a>.</strong>
    All rights reserved.
    <!--<div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>-->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!--<script src="https://www.netroz.com/yarn/vendors/jquery/dist/jquery.min.js"></script>-->
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('public/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('public/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('public/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('public/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/dist/js/demo.js') }}"></script>





@yield('specificjavascript')






<a href="" data-toggle="modal" data-target=".prmoptactionfurther_del" id="prmoptactionfurther_del"  data-backdrop="static" data-keyboard="false" style="display: none;"> &nbsp; </a>


  <script type="text/javascript">
    
  function delmyprogram(whatis, codeis)
  {
    document.getElementById("prmoptactionfurther_del").click();
    $("#whichcodeto").html(codeis);
    document.getElementById("whichcodetoval").value = whatis;
    
  }  

  </script>


  <div class="modal fade prmoptactionfurther_del profilepoptop poopaction1" role="dialog" style="top:10px;">
  <div class="modal-dialog" style="width:450px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header poopaction2" style="display: block;">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title titlepopset poopaction3" style="text-align: center;">
        Are you sure want to delete?
        </h4>
      </div>
   
      <div class="modal-body" style="text-align: center;">
    
  
      <div class="form-group fltleft" style="margin-top: 10px;">
    <!--<label class="profilepopnameba">Email Address:</label>-->
    
    
    <strong>Code: <span id="whichcodeto"></span></strong>
    
    <input type="hidden" id="whichcodetoval">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
     </div>
    
      </div>
    
      <div class="modal-footer" style=" clear:both; display: block;">
      
     <input type="submit" id="confirmdecidenow" data-dismiss="modal" class="btn btn-default btnstyle btnview emailpop btnstyle-sel" value="Confirm" style="width:75px !important;float: left;" />
       
       <input type="button" id="dismissssfurtheraction" class="btn btn-default btnstyle btnview marright5" value="Cancel" style="width:75px !important; float: right;" data-dismiss="modal"  />
      </div>
    
    </div>

  </div>
</div>



<script type="text/javascript">


$(document).ready(function() {


    $('#confirmdecidenow').on('click', function(){
       // event.preventDefault();

        var whichcodetoval=document.getElementById("whichcodetoval").value;

        //var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('ajaxdata.postdata') }}",
            method:"POST",
            data:{whichcodetoval: whichcodetoval},
            headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success:function(data)
            {


              if(data == "1")
              {
                 alert("Successfully Deleted.");                 
              }
              else
              {
                alert("Unable to Delete.");
              }

              location.reload();

                
            }
        })
    });




  });

</script>




</body>
</html>
