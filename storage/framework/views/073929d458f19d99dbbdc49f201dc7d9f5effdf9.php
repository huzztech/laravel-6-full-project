<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-sm-offset-3 ">
				
        	<form action="<?php echo e(url('posts')); ?>" method="post" role="form" enctype="multipart/form-data">
				
        		<?php if(count($errors) > 0): ?>
				
        		<ul>
				
        		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
        		<li class="alert alert-danger"><?php echo e($error); ?></li>
				
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        		</ul>

        	<?php endif; ?>
				
				
        		<?php if(session('message')): ?>
               	
               <h4 class="alert alert-info text-center"><?php echo e(session('message')); ?></h4>
               
               <?php endif; ?>

        	<?php echo e(csrf_field()); ?>


        	<div class="form-group col-sm-offset-2 ">
        	<legend>Create New Post</legend>
        	<div>

        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<input type="text" name="title" id="inputTitle" value="<?php echo e(old('title')); ?>"  class="form-control"/>
        	<div>

        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<textarea name="body" id="input"  class="form-control" rows="3"><?php echo e(old('body')); ?></textarea>
        	<div>
        	
        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<input type="file" name="thumbnail" id="thumbnail" value="<?php echo e(old('thumbnail')); ?>"  class="form-control"/>
        	<div>

        	<div class="form-group">
        	<div class="col-sm-10 col-sm-offset-2 ">
        	<button type="submit" class="btn btn-primary">Submit</button>
        	<div>

        	<div>

        	</form>			

            

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\l6app\resources\views/posts/create.blade.php ENDPATH**/ ?>