<!DOCTYPE html>
<html>
<head>
	<title>HuzzTech Laravel Software</title>


	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo e(url('img/favico.jpg')); ?>" type="image/png">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('landing/css/bootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/vendors/linericon/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/vendors/owl-carousel/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/css/magnific-popup.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/vendors/nice-select/css/nice-select.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/vendors/animate-css/animate.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('landing/vendors/flaticon/flaticon.css')); ?>">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo e(asset('landing/css/style.css')); ?>">


	<style type="text/css">
	
	
		.single_feature{
			
			width: 30%; 
			float: left; 
			padding-left: 30px; 
			padding-right: 30px; 
			border: none;			
		}
		
		@media (max-width: 991px)
		{
			.single_feature{	
				
			width: 100% !important;
			float: none !important;
			padding-left: 0px !important;
			padding-right: 0px !important;
			border-bottom: 1px solid #eeeeee !important;
				
			}
			
		}		
	
	
	</style>	


</head>
<body>




<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo e(url('/')); ?>"><h2>HuzzTech Laravel Software</h2><!--<img src="<?php echo e(url('img/colorlogo33.jpg')); ?>" alt="" style="width: 235px;">--></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/')); ?>">Generate Program</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Features</a></li>							

							<?php if(auth()->guard()->guest()): ?>
							<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/login')); ?>">Login</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo e(url('/register')); ?>">Signup</a></li>
							<?php endif; ?>
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?php echo e(url('/register')); ?>" class="primary_btn text-uppercase">free trial</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	
	
	 <?php echo $__env->yieldContent('specificpage'); ?>



	 <!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-4 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h3>About Me</h3>
						</div>
						<p>Huzz Tech Laravel Software for issue programs.</p>
						<p>
				&copy; <?php echo e(date('Y')); ?> All rights reserved | HuzzTech</p>
					</aside>
				</div>
				<div class="col-lg-4 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3>HuzzTech</h3>
						</div>
						<p><a href="#" style="color: #777777;"> About </a></p>
						<p><a href="#" style="color: #777777;"> Features </a></p>
						<p><a href="#" style="color: #777777;"> Contact Us </a></p>

						<p><a href="#" style="color: #777777;"> Privacy </a></p>
						<p><a href="#" style="color: #777777;"> Terms </a></p>
						
					</aside>
				</div>
				<div class="col-lg-4">
					<aside class="f_widget social_widget">
						<div class="f_title">
							<h3>Follow Me</h3>
						</div>
						<p>Let us be social</p>
						<ul class="list">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</aside>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo e(asset('landing/js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/js/stellar.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/js/jquery.magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/vendors/lightbox/simpleLightbox.min.js')); ?>"></script>	
	<script src="<?php echo e(asset('landing/vendors/nice-select/js/jquery.nice-select.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/vendors/isotope/imagesloaded.pkgd.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/vendors/isotope/isotope-min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/js/jquery.ajaxchimp.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/vendors/counter-up/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('landing/vendors/counter-up/jquery.counterup.min.js')); ?>"></script>
	
	<!-- contact js -->
        <script src="<?php echo e(asset('landing/js/jquery.form.js')); ?>"></script>
        <script src="<?php echo e(asset('landing/js/jquery.validate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('landing/js/contact.js')); ?>"></script>
	

	<!--gmaps Js-->
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo e(asset('landing/js/gmaps.min.js')); ?>"></script>-->
	<script src="<?php echo e(asset('landing/js/theme.js')); ?>"></script>
	







</body>
</html><?php /**PATH D:\wamp64\www\l6app\resources\views/layouts/invoice.blade.php ENDPATH**/ ?>