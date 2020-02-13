<?php $__env->startSection('title', 'Edit Program'); ?>


<?php $__env->startSection('specificpagecontent'); ?>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Program (<?php echo e($programs->code); ?>) </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Program</li>
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


              <?php if(count($errors) > 0): ?>
        
                           
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <div class="alert alert-danger"> <?php echo e($error); ?> </div>
            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

                <?php endif; ?>

               <?php if(session('message')): ?>
                    <div class="alert alert-info">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

              <form action="<?php echo e(url('home/program/update')); ?>" method="post" role="form">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                
                  <div class="row">

                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="set_date">Date <span class="required">*</span></label>
                  <input type="Date" id="set_date" name="set_date" class="form-control col-md-12 col-xs-12" value="<?php echo e(date('Y-m-d', strtotime($programs->set_date))); ?>" style="background: #ffffff;">
                  </div>
                  
                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="code">Code (STG-) <span class="required">*</span></label>
                  <input type="text" id="code" name="code" required="required" class="form-control col-md-12 col-xs-12" value="<?php echo e($programs->code); ?>" style="background: #ffffff;">
                 </div>


                 <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="customer">Customer <span class="required">*</span> <a onclick="addnewcust()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
            

            <select class="form-control col-md-12 col-xs-12" name="customer" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($company->id); ?>" <?php echo e($programs->customer == $company->id ? 'selected="selected"' : ''); ?>><?php echo e($company->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </select>
            
            
            </div>


            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                      <label for="unit">Unit <span class="required">*</span> <a onclick="addnew_unit()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
                      
               <select class="form-control col-md-12 col-xs-12" name="unit" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($unit->id); ?>" <?php echo e($programs->unit == $unit->id ? 'selected="selected"' : ''); ?>><?php echo e($unit->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </select>
              
            </div>
                 </div>

              


              <div class="card-header" style="background-color: #007bff; color: white; border-radius: none; margin-bottom: 20px;">
                  <h3 class="card-title" style="text-align: center; float: none;  font-weight: bold;">Construction</h3>
                </div>


                <div class="row">

                  <table width="100%" border="0" style="margin-left: 10px;">
            <tbody>
            <tr style="text-align: center;">
              <td style="padding-bottom: 10px;" width="10%">&nbsp;</td>
              <td style="padding-bottom: 10px;"><strong>Count</strong> <a onclick="addnew_warpcount()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></td>
              <td style="padding-bottom: 10px;"><strong>Yarn Type</strong> <a onclick="addnew_warptype()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></td>
              <td style="padding-bottom: 10px;"><strong>Yarn Blend</strong> <a onclick="addnew_warpblend()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></td>
            </tr>
            <tr>
              <td><strong>Warp  <span class="required">*</span></strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="warp_count" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($w_extra1->name); ?>" <?php echo e($programs->warp_count == $w_extra1->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra1->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select> 
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="warp_yarn_type" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra2->name); ?>" <?php echo e($programs->warp_yarn_type == $w_extra2->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra2->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="warp_yarn_blend" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra3->name); ?>" <?php echo e($programs->warp_yarn_blend == $w_extra3->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra3->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 1  <span class="required">*</span></strong></td>
              <td>
                            
              <select class="form-control col-md-12 col-xs-12" name="weft1_count" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($w_extra1->name); ?>" <?php echo e($programs->weft1_count == $w_extra1->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra1->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                
              </select>
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft1_yarn_type" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra2->name); ?>" <?php echo e($programs->weft1_yarn_type == $w_extra2->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra2->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft1_yarn_blend" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra3->name); ?>" <?php echo e($programs->weft1_yarn_blend == $w_extra3->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra3->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 2</strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="weft2_count" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                
                 <?php $__currentLoopData = $w_extras1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($w_extra1->name); ?>" <?php echo e($programs->weft2_count == $w_extra1->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra1->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft2_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                
                <?php $__currentLoopData = $w_extras2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra2->name); ?>" <?php echo e($programs->weft2_yarn_type == $w_extra2->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra2->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft2_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

               <?php $__currentLoopData = $w_extras3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra3->name); ?>" <?php echo e($programs->weft2_yarn_blend == $w_extra3->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra3->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 3</strong></td>
              <td>                
              
              <select class="form-control col-md-12 col-xs-12" name="weft3_count" style="width: 97%; margin-bottom: 10px;">
                
                 <option value="">Select</option>
                
                 <?php $__currentLoopData = $w_extras1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($w_extra1->name); ?>" <?php echo e($programs->weft3_count == $w_extra1->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra1->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft3_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>  

                <?php $__currentLoopData = $w_extras2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra2->name); ?>" <?php echo e($programs->weft3_yarn_type == $w_extra2->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra2->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>               
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft3_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option> 

                <?php $__currentLoopData = $w_extras3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra3->name); ?>" <?php echo e($programs->weft3_yarn_blend == $w_extra3->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra3->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 4</strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="weft4_count" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                
                <?php $__currentLoopData = $w_extras1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra1->name); ?>" <?php echo e($programs->weft4_count == $w_extra1->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra1->name); ?></option>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                
                </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft4_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>

                <?php $__currentLoopData = $w_extras2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra2->name); ?>" <?php echo e($programs->weft4_yarn_type == $w_extra2->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra2->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft4_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>   

               <?php $__currentLoopData = $w_extras3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra3->name); ?>" <?php echo e($programs->weft4_yarn_blend == $w_extra3->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra3->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                                
              </select>             
              </td>
            </tr>
            </tbody>
          </table>



                 </div>


                 <div class="ln_solid" style="border-bottom: 1px solid #e5e5e5;margin: 20px 0; "></div>



                <div class="row">
                  

                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
              <label for="w_end">End <span class="required">*</span></label>
              <input type="text" id="w_end" name="w_end" required="required" class="form-control col-md-12 col-xs-12" value="<?php echo e($programs->w_end); ?>">
              </div>

              <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_pick">Pick <span class="required">*</span></label>
            <input type="text" id="w_pick" name="w_pick" required="required" class="form-control col-md-12 col-xs-12" value="<?php echo e($programs->w_pick); ?>">
            </div>


            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_width">Width " <span class="required">*</span></label>
            <input type="text" id="w_width" name="w_width" required="required" class="form-control col-md-12 col-xs-12" value="<?php echo e($programs->w_width); ?>">
            </div>

            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_fabric_type">Fabric Type <span class="required">*</span> <a onclick="addnew_fabrictype()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
            <select class="form-control col-md-12 col-xs-12" name="w_fabric_type" required="">
                
                <option value="">Select</option>
                
                <?php $__currentLoopData = $w_extras4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra4->name); ?>" <?php echo e($programs->w_fabric_type == $w_extra4->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra4->name); ?></option>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </select>
            </div>


            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_selvedge">Selvedge <span class="required">*</span> <a onclick="addnew_selvedge()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
            <select class="form-control col-md-12 col-xs-12" name="w_selvedge" required="">
                
                <option value="">Select</option>
                
                <?php $__currentLoopData = $w_extras5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_extra5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <option value="<?php echo e($w_extra5->name); ?>" <?php echo e($programs->w_selvedge == $w_extra5->name ? 'selected="selected"' : ''); ?>><?php echo e($w_extra5->name); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                     
                
              </select>
            </div>


            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_writing">Writing <span class="required">*</span></label>
            <select class="form-control col-md-12 col-xs-12" name="w_writing" required="">
                
                <option value="">Select</option>
                <option value="Yes"  <?php echo e($programs->w_writing == "Yes" ? 'selected="selected"' : ''); ?>>Yes</option>
                <option value="No"  <?php echo e($programs->w_writing == "No" ? 'selected="selected"' : ''); ?>>No</option>
                
              </select>
            </div>


                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
              <label for="w_writing">Remarks <span class="required">*</span></label>
              <textarea class="form-control col-md-12 col-xs-12" name="remarks"><?php echo e($programs->remarks); ?></textarea>
              </div>

                </div>
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">

                  <input type="hidden" id="seller_id" name="seller_id" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="change_by" name="change_by" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="etm_code" name="etm_code" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="wid" name="wid" class="form-control col-md-12 col-xs-12" value="<?php echo e(Hashids::encode($programs->wid)); ?>">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            





 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\l6app\resources\views/admin/edit_weaving.blade.php ENDPATH**/ ?>