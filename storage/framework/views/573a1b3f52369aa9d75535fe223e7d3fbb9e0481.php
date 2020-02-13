<?php $__env->startSection('title', 'Change Password'); ?>


<?php $__env->startSection('specificpagecontent'); ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Change Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <!--<h3 class="card-title">Quick Example</h3>-->
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

              <form role="form" action="<?php echo e(url('home/profile/edit')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                    <label for="current-password">Old Password</label>
                    <input type="password" class="form-control" id="current-password" name="current-password" value="<?php echo e(old('current-password')); ?>" placeholder="Enter Old Password" required>
                    <?php if($errors->has('current-password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('current-password')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?>">
                    <label for="new-password">New Password</label>
                    <input type="password" class="form-control" id="new-password" name="new-password" value="<?php echo e(old('new-password')); ?>" placeholder="Password" required>
                    <?php if($errors->has('new-password')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('new-password')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label for="new-password-confirm">Confirm Password</label>
                    <input type="password" class="form-control" id="new-password-confirm" name="new-password_confirmation" value="<?php echo e(old('new-password_confirmation')); ?>" placeholder="Password" required>
                  </div>                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>





 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\l6app\resources\views/admin/edit.blade.php ENDPATH**/ ?>