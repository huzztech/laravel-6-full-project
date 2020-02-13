<?php $__env->startSection('title', 'Add Program'); ?>


<?php $__env->startSection('specificpagecontent'); ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Program</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Add Program</li>
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

              <form role="form" action="<?php echo e(url('home/program/add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">

                  <div class="row">

                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="set_date">Date <span class="required">*</span></label>
                  <input type="Date" id="set_date" name="set_date" class="form-control col-md-12 col-xs-12" value="27-nov-1991" style="background: #ffffff;">
                 </div>

                  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                  <label for="code">Code (STG-) <span class="required">*</span></label>
                  <input type="text" id="code" name="code" required="required" class="form-control col-md-12 col-xs-12" value="345345" style="background: #ffffff;">
                 </div>


                 <div class="col-md-3 col-sm-12 col-xs-12 form-group">
            <label for="customer">Customer <span class="required">*</span> <a onclick="addnewcust()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
            
            
            <select class="form-control col-md-12 col-xs-12" name="customer" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                <option value="1" selected="">AB Textile</option>
                <option value="24">Abry Karam</option>
                <option value="26">Ahmad Fabrics</option>
                <option value="21">AR</option>
                <option value="12">Ata Pasha</option>
                <option value="2">Azam Sb</option>
                <option value="3">Bao Jee</option>
                <option value="7">Boss Jee</option>
                <option value="18">Elite</option>
                <option value="23">Faras Fabrics</option>
                <option value="5">HT</option>
                <option value="6">Lawrence Tex</option>
                <option value="20">MI</option>                
                <option value="16">Multiple</option>
                <option value="13">N26</option>
                <option value="28">Narkins</option>
                <option value="8">Oriel Textile</option>
                <option value="9">PC</option>
                <option value="15">Qalamkar</option>
                <option value="17">Royal Fashion</option>
                <option value="27">Sami Siddique</option>
                <option value="25">Shahsawar</option>
                <option value="11">Sitara Textile</option>
                <option value="10">SJ</option>
                <option value="22">STM</option>
                <option value="19">US Tex</option>
                <option value="14">WA</option>
                <option value="4">Yasir Asif</option>
              </select>
            
            
            </div>


            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                      <label for="unit">Unit <span class="required">*</span> <a onclick="addnew_unit()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
                      
                      <select class="form-control col-md-12 col-xs-12" name="unit" required="" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                <option value="2" selected="">Colony</option>
                <option value="1">Gul Ahmed</option>
                <option value="3">MW</option>
                <option value="4">YTM</option>
                
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
                <option value="16s" selected="">16s</option>
                <option value="20s">20s</option>
                <option value="30s">30s</option>
                <option value="40s">40s</option>
                <option value="50s">50s</option>
                <option value="52s">52s</option>
                <option value="56s">56s</option>
                <option value="60s">60s</option>
                <option value="77s">77s</option>
                <option value="80s">80s</option>
                <option value="90s">90s</option>
                <option value="100s">100s</option>
                <option value="30D">30D</option>
                <option value="40D">40D</option>
                <option value="60D">60D</option>
                <option value="80D">80D</option>
                <option value="100D">100D</option>
                <option value="150D">150D</option>
                <option value="75D">75D</option>
                <option value="46">46</option>
                <option value="46s">46s</option>
                <option value="36s">36s</option>

              </select> 
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="warp_yarn_type" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>
                <option value="Ecru" selected="">Ecru</option>
                <option value="Yarn Dyed">Yarn Dyed</option>

              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="warp_yarn_blend" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>
                <option value="Cotton" selected="">Cotton</option>
                <option value="Denier">Denier</option>
                <option value="Linen">Linen</option>
                <option value="Modal">Modal</option>
                <option value="PP">PP</option>
                <option value="PV">PV</option>
                <option value="Tencel">Tencel</option>
                <option value="Viscose">Viscose</option>                
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 1  <span class="required">*</span></strong></td>
              <td>
                            
              <select class="form-control col-md-12 col-xs-12" name="weft1_count" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>
                <option value="16s" selected="">16s</option>
                <option value="20s">20s</option>
                <option value="30s">30s</option>
                <option value="40s">40s</option>
                <option value="50s">50s</option>
                <option value="52s">52s</option>
                <option value="56s">56s</option>
                <option value="60s">60s</option>
                <option value="77s">77s</option>
                <option value="80s">80s</option>
                <option value="90s">90s</option>
                <option value="100s">100s</option>
                <option value="30D">30D</option>
                <option value="40D">40D</option>
                <option value="60D">60D</option>
                <option value="80D">80D</option>
                <option value="100D">100D</option>
                <option value="150D">150D</option>
                <option value="75D">75D</option>
                <option value="46">46</option>
                <option value="46s">46s</option>
                <option value="36s">36s</option>
                
                                
              </select>
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft1_yarn_type" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>
                <option value="Ecru" selected>Ecru</option>                                
                <option value="Yarn Dyed">Yarn Dyed</option>                
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft1_yarn_blend" style="width: 97%; margin-bottom: 10px;" required="">
                
                <option value="">Select</option>                                
                <option value="Cotton" selected>Cotton</option>
                <option value="Denier">Denier</option>
                <option value="Linen">Linen</option>
                <option value="Modal">Modal</option>
                <option value="PP">PP</option>
                <option value="PV">PV</option>
                <option value="Tencel">Tencel</option>
                <option value="Viscose">Viscose</option>
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 2</strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="weft2_count" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                <option value="16s">16s</option>
                <option value="20s">20s</option>
                <option value="30s">30s</option>
                <option value="40s">40s</option>
                <option value="50s">50s</option>
                <option value="52s">52s</option>
                <option value="56s">56s</option>
                <option value="60s">60s</option>
                <option value="77s">77s</option>
                <option value="80s">80s</option>
                <option value="90s">90s</option>
                <option value="100s">100s</option>
                <option value="30D">30D</option>
                <option value="40D">40D</option>
                <option value="60D">60D</option>
                <option value="80D">80D</option>
                <option value="100D">100D</option>
                <option value="150D">150D</option>
                <option value="75D">75D</option>
                <option value="46">46</option>
                <option value="46s">46s</option>
                <option value="36s">36s</option>
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft2_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                <option value="Ecru">Ecru</option>
                <option value="Yarn Dyed">Yarn Dyed</option>                
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft2_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                <option value="Cotton">Cotton</option>
                <option value="Denier">Denier</option>
                <option value="Linen">Linen</option>
                <option value="Modal">Modal</option>
                <option value="PP">PP</option>
                <option value="PV">PV</option>
                <option value="Tencel">Tencel</option>
                <option value="Viscose">Viscose</option>                
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 3</strong></td>
              <td>                
              
              <select class="form-control col-md-12 col-xs-12" name="weft3_count" style="width: 97%; margin-bottom: 10px;">
                
                 <option value="">Select</option>
                <option value="16s">16s</option>
                <option value="20s">20s</option>
                <option value="30s">30s</option>
                <option value="40s">40s</option>
                <option value="50s">50s</option>
                <option value="52s">52s</option>
                <option value="56s">56s</option>
                <option value="60s">60s</option>
                <option value="77s">77s</option>
                <option value="80s">80s</option>
                <option value="90s">90s</option>
                <option value="100s">100s</option>
                <option value="30D">30D</option>
                <option value="40D">40D</option>
                <option value="60D">60D</option>
                <option value="80D">80D</option>
                <option value="100D">100D</option>
                <option value="150D">150D</option>
                <option value="75D">75D</option>
                <option value="46">46</option>
                <option value="46s">46s</option>
                <option value="36s">36s</option>
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft3_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>  
                <option value="Ecru">Ecru</option>
                <option value="Yarn Dyed">Yarn Dyed</option>               
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft3_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option> 
                <option value="Cotton">Cotton</option>                                
                <option value="Denier">Denier</option>
                <option value="Linen">Linen</option>
                <option value="Modal">Modal</option>
                <option value="PP">PP</option>
                <option value="PV">PV</option>
                <option value="Tencel">Tencel</option>
                <option value="Viscose">Viscose</option>                
                                
              </select>             
              </td>
            </tr>
            <tr>
              <td><strong>Weft 4</strong></td>
              <td>
              
              <select class="form-control col-md-12 col-xs-12" name="weft4_count" style="width: 97%; margin-bottom: 10px;">
                
                 <option value="">Select</option>
                <option value="16s">16s</option>
                <option value="20s">20s</option>
                <option value="30s">30s</option>
                <option value="40s">40s</option>
                <option value="50s">50s</option>
                <option value="52s">52s</option>
                <option value="56s">56s</option>
                <option value="60s">60s</option>
                <option value="77s">77s</option>
                <option value="80s">80s</option>
                <option value="90s">90s</option>
                <option value="100s">100s</option>
                <option value="30D">30D</option>
                <option value="40D">40D</option>
                <option value="60D">60D</option>
                <option value="80D">80D</option>
                <option value="100D">100D</option>
                <option value="150D">150D</option>
                <option value="75D">75D</option>
                <option value="46">46</option>
                <option value="46s">46s</option>
                <option value="36s">36s</option>
                
                                
              </select>
              
              
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft4_yarn_type" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>
                <option value="Ecru">Ecru</option>
                <option value="Yarn Dyed">Yarn Dyed</option>                
                                
              </select>             
              </td>
              <td>              
              <select class="form-control col-md-12 col-xs-12" name="weft4_yarn_blend" style="width: 97%; margin-bottom: 10px;">
                
                <option value="">Select</option>                                
                <option value="Cotton">Cotton</option>                                
                <option value="Denier">Denier</option>
                <option value="Linen">Linen</option>
                <option value="Modal">Modal</option>
                <option value="PP">PP</option>
                <option value="PV">PV</option>
                <option value="Tencel">Tencel</option>
                <option value="Viscose">Viscose</option>                
                                
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
              <input type="text" id="w_end" name="w_end" required="required" class="form-control col-md-12 col-xs-12" value="asdf">
              </div>

              <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_pick">Pick <span class="required">*</span></label>
            <input type="text" id="w_pick" name="w_pick" required="required" class="form-control col-md-12 col-xs-12" value="asdf">
            </div>


            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_width">Width " <span class="required">*</span></label>
            <input type="text" id="w_width" name="w_width" required="required" class="form-control col-md-12 col-xs-12" value="asdf">
            </div>

            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_fabric_type">Fabric Type <span class="required">*</span> <a onclick="addnew_fabrictype()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
            <select class="form-control col-md-12 col-xs-12" name="w_fabric_type" required="">
                
                <option value="">Select</option>
                <option value="1x1" selected="">1x1</option>
                <option value="1x3">1x3</option>
                <option value="2x1 Twill">2x1 Twill</option>
                <option value="3x1 Satin">3x1 Satin</option>
                <option value="4x1 Satin">4x1 Satin</option>
                <option value="BFC">BFC</option>
                <option value="Dobby">Dobby</option>
                <option value="DPI">DPI</option>
                <option value="Jacquard">Jacquard</option>
                
              </select>
            </div>


            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_selvedge">Selvedge <span class="required">*</span> <a onclick="addnew_selvedge()" style="cursor: pointer;"> <i class="fa fa-plus" style="font-size: 11px;"></i> </a></label>
            <select class="form-control col-md-12 col-xs-12" name="w_selvedge" required="">
                
                <option value="">Select</option>
                <option value="Leno" selected="">Leno</option>
                <option value="Tuckin">Tuckin</option>                      
                
              </select>
            </div>


            <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <label for="w_writing">Writing <span class="required">*</span></label>
            <select class="form-control col-md-12 col-xs-12" name="w_writing" required="">
                
                <option value="">Select</option>
                <option value="Yes" selected="">Yes</option>
                <option value="No">No</option>
                
              </select>
            </div>



                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
              <label for="w_writing">Remarks <span class="required">*</span></label>
              <textarea class="form-control col-md-12 col-xs-12" name="remarks">asdfsadf</textarea>
              </div>

                </div>



                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="hidden" id="seller_id" name="seller_id" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="change_by" name="change_by" class="form-control col-md-12 col-xs-12" value="">
                  <input type="hidden" id="etm_code" name="etm_code" class="form-control col-md-12 col-xs-12" value="">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\l6app\resources\views/admin/add_weaving.blade.php ENDPATH**/ ?>