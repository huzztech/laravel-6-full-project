<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="here nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                        
                        <li class="dropdown">			
			
			
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> 
			
			<?php if(Session::has('locale')): ?>
			
			<?php echo e(session('locale')); ?>

			
			<?php else: ?>
			
			<?php echo e(Config::get('app.locale')); ?>

			
			<?php endif; ?>
			
			
			<span class="caret"></span></a>
			
			
			<ul class="dropdown-menu" style="width: 108px;">
		  		<li style="padding-top: 3px; padding-bottom: 3px;"><a href="<?php echo e(url('language/en')); ?>" style="color: black !important;"><span class="flag-icon flag-icon-us"> </span> English</a></li>
			    <li style="padding-top: 3px; padding-bottom: 3px;"><a href="<?php echo e(url('language/ur')); ?>" style="color: black !important;"><span class="flag-icon flag-icon-pk"> </span> اردو</a></li>
			</ul>
		  	</li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    
    <?php $__env->startComponent('layouts.alret', ['type'=> 'dynamic']); ?>

    <?php $__env->slot('messages'); ?>
    My new message slot
    <?php $__env->endSlot(); ?>

    Slot component akif

    <?php $__env->startComponent('layouts.alret'); ?>





    <!--<?php $__env->startComponent('layouts.alert', ['type'=> 'dynamic']); ?>

    <?php $__env->slot('messages'); ?>
    My new message slot
    <?php $__env->endSlot(); ?>

    Slot component

    <?php echo $__env->renderComponent(); ?> -->

    <?php $__env->startSection('sideborshow'); ?>
    
    <div> New sidebaar valueeeeee       </div>
    <?php echo $__env->yieldSection(); ?>

</body>
</html>
<?php /**PATH D:\wamp64\www\l5auth\resources\views/layouts/app.blade.php ENDPATH**/ ?>