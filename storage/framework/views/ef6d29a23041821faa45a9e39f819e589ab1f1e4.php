<?php $__env->startSection('title', 'View Multiple Programs'); ?>


<?php $__env->startSection('specificpagecontent'); ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Multiple Programs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Multiple Programs</li>
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

    <div class="col-12">

        <div class="card">
          
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

              <!--<div class="card-header">
                &nbsp;
              </div> -->
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>

                <tr>                          
                 <th width="9%">Code</th>
                 <th width="9%">Date</th>
                 <th>Construction</th>
                  <th width="8%">Quantity </th>
                  <th width="8%">Customer </th>
                  <th width="8%">Unit </th>
                  <th width="7%">Status </th>
                  <th width="7%">Action </th>
                </tr>
                  </thead>
                  <tbody>

                <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php

                  $subcode_number = $program->subcode_number;

                  $wid              = $program->wid;
                  $seller_id        = $program->seller_id;
                  $unit             = $program->unit;
                  $code             = $program->code;
                  $sub_code         = $program->sub_code;
                  $construction     = $program->construction;
                  $fabric_type      = $program->fabric_type;
                  $change_by        = $program->change_by;
                  $on_update        = $program->on_update;
                  $ent_date         = $program->ent_date;
                  
                  $customer         = $program->customer;
                  
                  $warp_count       = $program->warp_count;
                  $warp_yarn_type   = $program->warp_yarn_type;
                  $warp_yarn_blend  = $program->warp_yarn_blend;
                  
                  $weft1_count      = $program->weft1_count;
                  $weft1_yarn_type  = $program->weft1_yarn_type;
                  $weft1_yarn_blend = $program->weft1_yarn_blend;
                  
                  $weft2_count      = $program->weft2_count;
                  $weft2_yarn_type  = $program->weft2_yarn_type;
                  $weft2_yarn_blend = $program->weft2_yarn_blend;
                  
                  $weft3_count      = $program->weft3_count;
                  $weft3_yarn_type  = $program->weft3_yarn_type;
                  $weft3_yarn_blend = $program->weft3_yarn_blend;
                  
                  $weft4_count      = $program->weft4_count;
                  $weft4_yarn_type  = $program->weft4_yarn_type;
                  $weft4_yarn_blend = $program->weft4_yarn_blend;
                  
                  $w_end            = $program->w_end;
                  $w_pick           = $program->w_pick;
                  $w_width          = $program->w_width;
                  $w_fabric_type    = $program->w_fabric_type;
                  $w_selvedge       = $program->w_selvedge;
                  $w_writing        = $program->w_writing;
                  $subcode_number   = $program->subcode_number;
                  $mastercode       = $program->mastercode;
                  
                  $w_writing_val    = $program->w_writing_val;
                  $w_writing_val    = str_replace("  ", " &nbsp; ", $w_writing_val);
                  
                  $remarks          = $program->remarks;
                  $status           = $program->status;
                  
                  $levelcode        = $program->levelcode;
                  
                  $order_quantity   = $program->order_quantity;
                  $design_status_date = $program->design_status_date;
                  
                  $waiting_time     = $program->waiting_time;
                  $waiting_time     = $design_status_date;
                  
                  $etm_code         = $program->etm_code;                  

                  $encoded_id       = Hashids::encode($wid);
                  $encoded_code     = Hashids::encode('abcd');


                  if($w_writing_val != "")
                  {
                    $w_writing = "- ".$w_writing_val;
                  }
                  else
                  {
                    $w_writing = "";
                  }
                  
                  
                  if($weft2_count != "")
                  {
                    $weft1_count = $weft1_count."+";
                  }
                  if($weft3_count != "")
                  {
                    $weft2_count = $weft2_count."+";
                  }
                  if($weft4_count != "")
                  {
                    $weft3_count = $weft3_count."+";
                  }
                  if($remarks != "")
                  {
                    $remarks = "- ".$remarks;
                    $remarks = "";
                  }


                  $imgurl    = "../img/products/";        
                 
                  
                  //$bgcolor = "";

                  $further_path = "home/program/single/".$encoded_id;

                ?>


                    
                <tr>
                 <td><a style="color: black;" href='<?php echo e(url("$further_path")); ?>'><?php echo e($code); ?> </a></td>
                 <td><?php echo e(\Carbon\Carbon::parse($program->set_date)->format('d-M-y')); ?></td>
                 <td>
                   
                  <?php echo $warp_count; ?>x<?php echo $weft1_count; ?><?php echo $weft2_count; ?><?php echo $weft3_count; ?><?php echo $weft4_count; ?>/<?php echo $w_end; ?>x<?php echo $w_pick; ?>-<?php echo $w_width; ?>" <?php echo $w_fabric_type; ?> <?php echo $w_selvedge; ?> <?php echo $w_writing; ?> <?php echo $remarks; ?>

                 </td>
                  <td><?php echo e($order_quantity); ?> </td>
                  <td><?php echo e($program->company_fun['name']); ?> </td>
                  <td><?php echo e($program->unit_fun['name']); ?> </td>
                  <td><?php echo e($status); ?></td>
                  <td> <a onclick="delmyprogram('<?php echo e($encoded_id); ?>', '<?php echo e($code); ?>')" style="cursor: pointer; color: white;" class="btn btn-danger"> Delete </a> </td>
                 </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                </table>                
                
              </div>
              <!-- /.card-body -->
            </div>

            </div>

 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\l6app\resources\views/admin/view_multiple.blade.php ENDPATH**/ ?>