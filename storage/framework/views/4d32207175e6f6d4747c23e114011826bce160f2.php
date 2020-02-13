<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-sm-offset-3 ">
        	
        	<h1><?php echo e(session('token1')); ?></h1>
            
        	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<p><?php echo e($post->title); ?></p>
			
			<p><?php echo e($post->body); ?></p>
			
			<p>Created at: <?php echo e($post->created_at->diffForHumans()); ?></p>
			
			<p><img width="200" src="<?php echo e(url('images/'.$post->thumbnail)); ?>" /></p>
			
			 <?php if(Auth::check() && Auth::id() === $post->user_id): ?>
			
			<p style="background:red;">edit / delete</p>
			
			<?php endif; ?>
			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
			
			<!--<li>
			 <a href="#"> <?php echo e($post->title); ?>: <img width="200" src="<?php echo e(url('images/'.$post->thumbnail)); ?>" /> <?php echo e($post->body); ?> </a> ---<br /><br /> Created at: <?php echo e($post->created_at->diffForHumans()); ?>

			</li>-->

            

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\l5auth\resources\views/posts/index.blade.php ENDPATH**/ ?>