<?php $__env->startSection('specificpage'); ?>
<div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!

                    <br />

                    D.O.B: <?php echo e(Auth::user()->dob->formatLocalized('%d %B %Y')); ?>


                     <br />

                    Humans: <?php echo e(Auth::user()->dob->diffForHumans()); ?>

                    
                    <br />
                    
                    Age: <?php echo e(Auth::user()->dob->age); ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.invoice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\l6app\resources\views/home.blade.php ENDPATH**/ ?>