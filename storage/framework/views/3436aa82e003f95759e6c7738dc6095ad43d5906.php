<?php $__env->startSection('title', 'Program Detail'); ?>


<?php $__env->startSection('specificpagecontent'); ?>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Program Detail (<?php echo e($programs->code); ?>) </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Program Detail</li>
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
              <!-- /.card-header -->
              <!-- form start -->

              <div class="card card-primary">
              <div class="card-header">
                <!--<h3 class="card-title">Quick Example</h3>-->
              </div>


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



                    <div class="x_title" style="margin: 7px;">
                    
                    <h5 style="margin-right: 5px; width: 99%; margin-top: 0px;">                    
                  
                  
                   <?php echo e($programs->code . ' | ' . $programs->etm_code); ?>                       
                    
                    <?php echo e($programs->warp_count . 'x' . $programs->weft1_count . $programs->weft2_count . $programs->weft3_count . $programs->weft4_count. '/'. $programs->w_end. 'x'. $programs->w_pick. '-'. $programs->w_width); ?>" <?php echo e($programs->w_fabric_type); ?>  <?php echo e($programs->w_selvedge); ?> <?php echo e($programs->remarks); ?>

                    
                       
                     <!--</div>-->   

                     <span style="float: right;"> <?php echo e(\Carbon\Carbon::parse($programs->set_date)->format('d-M-y')); ?> </span>

                     <a onclick="delmyprogram('<?php echo e(Hashids::encode($programs->wid)); ?>', '<?php echo e($programs->code); ?>')" style="padding: 3px; float: right; margin-right: 10px; cursor: pointer; color: white;" class="btn btn-danger"> Delete </a>

                     <a href="<?php echo e(url('/home/program/cancel/' . Hashids::encode($programs->wid))); ?>" class="btn btn-danger" name="cancelme" style="padding: 3px; float: right; margin-right: 10px;">Cancel</a>

                     <a href="<?php echo e(url('/home/program/edit/' . Hashids::encode($programs->wid))); ?>" class="btn btn-info" name="editme" style="padding: 3px; float: right; margin-right: 10px;">Edit</a>
                                          
                     </h5>

                   
              </div>


              <table width="100%" border="1" style="text-align: center;">
            <tbody>
            <tr style="text-align: center;">
              <td style="padding-bottom: 10px;" width="10%">&nbsp;</td>
              <td style="padding-bottom: 10px;"><strong>Count</strong></td>
              <td style="padding-bottom: 10px;"><strong>Yarn Type</strong></td>
              <td style="padding-bottom: 10px;"><strong>Yarn Blend</strong></td>
            </tr>
            <tr>
              <td><strong>Warp</strong></td>
              <td>
                        
              <?php echo e($programs->warp_count); ?>


              </td>
              <td>              
              <?php echo e($programs->warp_yarn_type); ?>

              </td>
              <td>              
              <?php echo e($programs->warp_yarn_blend); ?>

              </td>
            </tr>
            
            <?php if($programs->weft1_count !== "" && $programs->weft1_yarn_type !== "" && $programs->weft1_yarn_blend !== ""): ?>
            

            <tr>
              <td><strong>Weft 1</strong></td>
              <td>
              
              <?php echo e($programs->weft1_count); ?>          
              </td>
              <td>              
             <?php echo e($programs->weft1_yarn_type); ?>           
              </td>
              <td>              
              <?php echo e($programs->weft1_yarn_blend); ?>         
              </td>
            </tr>
              
            <?php endif; ?>



            <?php if($programs->weft2_count !== "" && $programs->weft2_yarn_type !== "" && $programs->weft2_yarn_blend !== ""): ?>
            

            <tr>
              <td><strong>Weft 2</strong></td>
              <td>
              
              <?php echo e($programs->weft2_count); ?>          
              </td>
              <td>              
             <?php echo e($programs->weft2_yarn_type); ?>           
              </td>
              <td>              
              <?php echo e($programs->weft2_yarn_blend); ?>         
              </td>
            </tr>
              
            <?php endif; ?>


            <?php if($programs->weft3_count !== "" && $programs->weft3_yarn_type !== "" && $programs->weft3_yarn_blend !== ""): ?>
            

            <tr>
              <td><strong>Weft 3</strong></td>
              <td>
              
              <?php echo e($programs->weft3_count); ?>          
              </td>
              <td>              
             <?php echo e($programs->weft3_yarn_type); ?>           
              </td>
              <td>              
              <?php echo e($programs->weft3_yarn_blend); ?>

              </td>
            </tr>
              
            <?php endif; ?>



            <?php if($programs->weft4_count !== "" && $programs->weft4_yarn_type !== "" && $programs->weft4_yarn_blend !== ""): ?>
            

            <tr>
              <td><strong>Weft 4</strong></td>
              <td>
              
              <?php echo e($programs->weft4_count); ?>

              </td>
              <td>
             <?php echo e($programs->weft4_yarn_type); ?>

              </td>
              <td>
              <?php echo e($programs->weft4_yarn_blend); ?>

              </td>
            </tr>
              
            <?php endif; ?>                        
                        
                        
                        
            </tbody>
          </table>


          <div class="col-md-12 col-sm-9 col-xs-12">
          
                      <div class="">
                        
              
                        <div>
                          
                          <div>
              
                           <div class="adjustscrollsode" style="overflow: hidden scroll; width: 48%; float: left; height: 693px; margin-top: 20px;">
                           
                            <!-- start user projects -->
                            <input id="filePicker" class="filetosaleatt" name="saleattach" type="file" style="display:none;">
                            <table class="data table table-striped no-margin heightment" style="font-family: 'calibri'; font-size: 14px; width: 100%;">
                
                              <tbody>
                               
                                                               
                               <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'pa02jv6f7getihr2np6pexyxx5wksyh9l6lv382xc5qc7r28jxdoed193cml0aW5nX3ZhbA==zi7myj6wcsmf4zkz94q7x88p7hycegnt0g3zqzna4u4y3a19ci9ljn2f0ozhxqp7')">
                                  <td width="35%"><strong>Writing Name:</strong></td>
                                  <td width="65%">
                                  
                                  <div class="editmywritingname_text" style="
                                    width: 91%;
                                    float: left;
                                    white-space: inherit;
                                    border: none;
                                    background: none;
                                    padding: 0px 5px;
                                    margin: 0;
                                    color: #73879C;   "> 

                               <?php echo e($programs->w_writing_val); ?>




                              </div>
                                  
                                  <input type="text" name="mywritingname" value="FANTASY  /////  100% PURE SUPERFINE COTTON  /////" class="mywritingname" id="mywritingname" style="display: none;">
                                  
                                 <!--<textarea name="mywritingname" class="mywritingname" id="mywritingname" rows="1">FANTASY &nbsp; ///// &nbsp; 100% PURE SUPERFINE COTTON &nbsp; /////</textarea>-->
                                  
                                   
                                                                    
                                  <a style="float: right; cursor: pointer;" id="editmywritingname" class="editmywritingname_icon"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname" class="savemywritingname"> <i class="fa fa-save"></i> </a>                
                                  
                                                                    
                                  </td>
                                </tr>
                                 
                                  
                               <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', '8t04n36thl0i355pyupot4qgphnp6p0vjwapm3dym1gio29rs5r0rc2VsdmVkZ2VfY29sb3I=w3pjg81k6735c9r6prk4i6x53e3uj34u7uvri78sqosb34c3mfwwg3qkutlll8q2')">
                                  <td><strong>Selvedge Color:</strong></td>
                                  <td>                                  
                                      
                                   <span class="editmywritingname_text_a9"> <?php echo e($programs->selvedge_color); ?>  </span>
                                                                                        
                                  <input type="text" name="mywritingname_a9" value="<?php echo e($programs->selvedge_color); ?>" class="mywritingname_a9" id="mywritingname_a9" style="display: none;">
                                                      
                                                                    
                                  <a style="float: right; cursor: pointer;" id="editmywritingname_a9" class="editmywritingname_icon_a9"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a9" class="savemywritingname_a9"> <i class="fa fa-save"></i> </a>
                                  
                                                                    </td>
                                </tr>
                                
                                  
                              <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', '9nuyc26reb5h4c4brcmje657rlort7njk05gejw2epwcbtzrwv7rrb3JkZXJfcXVhbnRpdHk=decelxmi83tqrzd45c26gol95xdhl54lr9pel6l6w5cqnrnkzhvq78lexn2jnhpt')">
                                  <td width="35%"><strong>Order Quantity:</strong></td>
                                  <td width="65%">
                                  
                                  <span class="editmywritingname_text_a2"> <?php echo e($programs->order_quantity); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a2" value="<?php echo e($programs->order_quantity); ?>" class="mywritingname_a2" id="mywritingname_a2" style="display: none;">
                  
                    
                                                                    
                                  
                                  <a style="float: right; cursor: pointer;" id="editmywritingname_a2" class="editmywritingname_icon_a2"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a2" class="savemywritingname_a2"> <i class="fa fa-save"></i> </a>
                                  
                                  
                                          
                                  </td>
                                </tr>
                                                                               
                                                              
                                <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'es4r9pb0jpqedq9i5ppos6lkpka1akgcxndble2ys7joduzq99ek8c2FtcGxlX3dvcmQ=q2xzp2u1dv9hp3gdzu7n9jc36nu1dkce331gni2nhrqsf8mpi6twvrcgcd15vl8m')">
                                  <td><strong>Sample:</strong></td>
                                  <td>
                                   
                                 <span class="editmywritingname_text_a7"> <?php echo e($programs->design_status); ?> </span>
                                   
                                  <span class="editmywritingname_text_a7_2" style="margin-left: 10px;"> <?php echo e(\Carbon\Carbon::parse($programs->design_status_date)->format('d-M-y')); ?></span>
                                  
                                  <!-------------------------------------->
                                  
                                  <select class="mywritingname_a7" name="mywritingname_a7" id="mywritingname_a7" style="width: 30%; padding: 2px 0px; margin-right: 5px;display: none;">
                     
                  <option value="">Select</option>
                  <option value="Pending" <?php echo e($programs->design_status == 'Pending' ? 'selected="selected"' : ''); ?>>Pending</option>
                  <option value="Received" <?php echo e($programs->design_status == 'Received' ? 'selected="selected"' : ''); ?>>Received</option>
                  <option value="Approved" <?php echo e($programs->design_status == 'Approved' ? 'selected="selected"' : ''); ?>>Approved</option>
                   
                    </select>
                                     
                                  <input type="text" name="mywritingname_a7_2" value="<?php echo e(\Carbon\Carbon::parse($programs->design_status_date)->format('d-M-y')); ?>" class="mywritingname_a7_2 hasDatepicker" id="mywritingname_a7_2" style="width: 30%;display: none;" readonly="">
                                    
                                                                    
                                  
                                   <a style="float: right; cursor: pointer;" id="editmywritingname_a7" class="editmywritingname_icon_a7"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a7" class="savemywritingname_a7"> <i class="fa fa-save"></i> </a>
                                  
                                  
                                                                  </td>
                                </tr>
                                
                                
                                <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'jd9m1t8yrbtwsl3kfpln094nv2wa79pli4lwwo9gailix7k5hg3l9c3R5bGVfaWQ=09o21rekwqr9zyclufo3u29ez0h23xn44snat174eobospm6de8fxef1ppk0kdth')">
                                  <td width="35%"><strong>Style ID:</strong></td>
                                  <td width="65%">
                                  
                                  <span class="editmywritingname_text_a14"> <?php echo e($programs->style_id); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a14" value="<?php echo e($programs->style_id); ?>" class="mywritingname_a14" id="mywritingname_a14" style="display: none;">                  
                    
                                          
                                  </td>
                                </tr>                                
                                
                                
                                 <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'hd6ed0gyay1taml4zwwiqya1j4z4bnxsdp1qdmwvuo9thwwusem7bbG9vbXM=jx95bxu2jxntybu93uqpl24kx5irh3wg42qlj17jlawmmmboji4awrasbipvwy48')">
                                  <td><strong>Number of Looms:</strong></td>
                                  <td>
                                  
                                  <span class="editmywritingname_text_a11"> <?php echo e($programs->looms); ?> </span>
                                      
                                    
                                    <select class="mywritingname_a11" name="mywritingname_a11" id="mywritingname_a11" style="width: 66%; display: none;">
                    
                  <option value="">Select</option> 


                  <?php for($wewe = 1; $wewe <= 20; $wewe++): ?>


                  <option value="<?php echo e($wewe); ?>" <?php echo e($programs->looms == $wewe ? 'selected="selected"' : ''); ?>><?php echo e($wewe); ?></option>


                  <?php endfor; ?>
                  
                                   
                  </select>
                                      
                                      
                                      
                                   <input type="text" name="mywritingname_a11" value="<?php echo e($programs->looms); ?>" class="mywritingname_a11" id="mywritingname_a11" style="display: none;">
                                  
                                                                    
                                  </td>
                                </tr>
                                                              
                                 <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'v2ib1bb5rjiws15drv4p0bzxugzpg7ckvdve0op8cik2csbzqt6yrY2xvc2luZ19kYXRlwfbh1pq09csb1d524fobkaawyq515br26s2pxwe1v3w9mabvkm09l2yb7mob8jm6')">
                                  <td><strong>Closing Date:</strong></td>
                                  <td>
                    
                                 <span class="editmywritingname_text_a12"> <?php echo e(\Carbon\Carbon::parse($programs->closing_date)->format('d-M-y')); ?> </span>
                                      
                                   <input type="text" name="mywritingname_a12" value="<?php echo e(\Carbon\Carbon::parse($programs->closing_date)->format('d-M-y')); ?>" class="mywritingname_a12 hasDatepicker" id="mywritingname_a12" style="display: none;" readonly="">
                                                                    
                                  
                                  </td>
                                </tr>
                                 
                                 <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'sgz5srli8pwf9lfimvjspm05l1gjbxb2483kmgt2oovlky9c4v7o4cHJvZHVjZWRfcXVhbnRpdHk=juhluiczy1n9e0g3okrp2j4sr88d45bb1ndklt8oqdyzwq72th1mx7dioqafwak7')">
                                  <td><strong>Produced Quantity:</strong></td>
                                  <td>
                    
                                 <span class="editmywritingname_text_a13"> <?php echo e($programs->produced_quantity); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a13" value="<?php echo e($programs->produced_quantity); ?>" class="mywritingname_a13" id="mywritingname_a13" style="display: none;">
                                  
                                                                    
                                  </td>
                                </tr>
                  
                                 <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', '8u7kuzowg0fz56lzmgext8d2wxnqj2rcjibm4fgj2xvjfvh0w3a0yZGlzcGF0Y2hfcXVhbnRpdHk=fpkih6dh3w61z1li7dbda83mbbiu6g3d0ke4h3q8x3oriopais5tdnkj0117nvi6')">
                                  <td><strong>Dispatch Quantity:</strong></td>
                                  <td>
                    
                                  <span class="editmywritingname_text_a5"> <?php echo e($programs->dispatch_quantity); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a5" value="<?php echo e($programs->dispatch_quantity); ?>" class="mywritingname_a5" id="mywritingname_a5" style="display: none;">
                                 
                                                                    
                                  
                                  <a style="float: right; cursor: pointer;" id="editmywritingname_a5" class="editmywritingname_icon_a5"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a5" class="savemywritingname_a5"> <i class="fa fa-save"></i> </a>
                                  
                                  
                                                                    </td>
                                </tr>
                  
                                                             
                                                                  
                  <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', '58sxfwbhggybsh35rpdi2apnkpy5khn9kydygwby2cw5qqf66wj5aZGlzcGF0Y2hfZGF0ZQ==qgrhzuuvi1lemavmtwbl6lqditnzciklwvc36gavmcp71rlz8o64lae3oggtwrm8')">
                                  <td><strong>Dispatch Date:</strong></td>
                                  <td>
                    
                                 <span class="editmywritingname_text_a8"> <?php echo e(\Carbon\Carbon::parse($programs->dispatch_date)->format('d-M-y')); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a8" value="<?php echo e(\Carbon\Carbon::parse($programs->dispatch_date)->format('d-M-y')); ?>" class="mywritingname_a8 hasDatepicker" id="mywritingname_a8" readonly="" style="display: none;">
                                 
                                                                    
                                  
                                  <a style="float: right; cursor: pointer;" id="editmywritingname_a8" class="editmywritingname_icon_a8"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a8" class="savemywritingname_a8"> <i class="fa fa-save"></i> </a>
                                  
                                  
                                                                    </td>
                                </tr>
                                                              
                                  <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'f3troc2oz6l4i2msfvf6d5n4qmtn2t4wrsivobyx8lusxswgxja8oZGlzcGF0Y2hfYWRkcmVzcw==er9vl93pjhnvvbspnlcqbuvttlbtip3r1xgpjnigk930f4vn7er86sfif810dqdn')">
                                  <td><strong>Dispatch Address:</strong></td>
                                  <td>
                    
                                  <span class="editmywritingname_text_a4"> <?php echo e($programs->dispatch_address); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a4" value="<?php echo e($programs->dispatch_address); ?>" class="mywritingname_a4" id="mywritingname_a4" style="display: none;">
                                 
                                                                    
                                  
                                  <a style="float: right; cursor: pointer;" id="editmywritingname_a4" class="editmywritingname_icon_a4"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a4" class="savemywritingname_a4"> <i class="fa fa-save"></i> </a>
                                  
                                  
                                                                    </td>
                                </tr>
                                 
                                 <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'mps9kvqbepraxu0b9zpfnmmlkcy0dk9hmrzyk1g88r5ag3tepr318ZGVsaXZlcmVkX3F1YW50aXR5ud5sabq02763rtnde0xdu6cggpmtlbxasw0oz1v9200hd4r4sq6jwvzh2vver6fm')">
                                  <td>
                                  <strong>Delivered Quantity:</strong>
                                  
                                  <br>
                                  
                                  <a class="addlinesaleinv"> <i class="fa fa-plus"></i> <strong>Customer</strong> </a>
                                  
                                  </td>
                                  <td>
                  
                                  <span class="editmywritingname_text_a10"> <?php echo e($programs->delivered_quantity); ?> </span>
                                   
                                   <input type="text" name="mywritingname_a10" value="<?php echo e($programs->delivered_quantity); ?>" class="mywritingname_a10" id="mywritingname_a10" style="display: none;">
                                    
                                                                    
                                  <a style="float: right; cursor: pointer;" id="editmywritingname_a10" class="editmywritingname_icon_a10"> <i class="fas fa-pencil-alt"></i> </a>
                                  
                                  <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a10" class="savemywritingname_a10"> <i class="fa fa-save"></i> </a>
                                  
                                  
                                                                    </td>
                                </tr>
                                                             
                                                             
                              <!-------------Add New Cust------------------>
                                                                                            
                                                                
                                 
                              <tr>
                <td><strong>Stock at Unit:</strong></td>
                <td>


               <span class="editmywritingname_text_a6"> <?php echo e($programs->stock_quantity); ?>  </span>
              
              <!--<input type="text" name="mywritingname_a6" value="<?php echo e($programs->stock_quantity); ?>" class="mywritingname_a6" id="mywritingname_a6" />-->

                                
                <!--<a style="float: right; cursor: pointer;" id="editmywritingname_a6" class="editmywritingname_icon_a6"> <i class="fa fa-pencil"></i> </a>
                
                <a style="float: right; cursor: pointer;" id="savemywritingname_a6" class="savemywritingname_a6"> <i class="fa fa-save"></i> </a>-->


                                </td>
              </tr>
                            
                            
                                                        
                <tr>
                  <td><strong>Stock at STM:</strong></td>
                  <td>
                  
                 <span> <?php echo e($programs->stock_at_stm); ?>  </span>
                    
                  </td>
                </tr>
                                    
                                                                                       
                                                           
                                                           
                         <tr style="cursor: pointer;" onclick="openlog('jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8', 'fcrhyynkmtrkpi0cly7feuuwryu72096ryrjl7bwmraed3vtcq96tbm90ZXNfZm9yX3Vz0p08dqg916uwbm0v9achbzxx4bcbfhefg9n5wzuhteyd6mtu0qhz7kubz8ttsn50')">
              <td><strong>Notes:</strong></td>
              <td>
              
              <span class="editmywritingname_text_a15"> <?php echo e($programs->notes_for_us); ?> </span>
              
               <!--<input type="text" name="mywritingname_a15" value="" class="mywritingname_a15" id="mywritingname_a15" />-->
                
                <textarea name="mywritingname_a15" class="mywritingname_a15" id="mywritingname_a15" rows="5" style="display: none;"></textarea>              
              

                <a style="float: right; cursor: pointer;" id="editmywritingname_a15" class="editmywritingname_icon_a15"> <i class="fas fa-pencil-alt"></i> </a>

                <a style="float: right; cursor: pointer; display: none;" id="savemywritingname_a15" class="savemywritingname_a15"> <i class="fa fa-save"></i> </a>


                              </td>
            </tr>
                                                          
                                                                                  
                                                            
                                                              
                             <input type="hidden" name="settoneofwod" id="settoneofwod" value="jddywrq8u4lsykp2ftpj9egn8b2tc4fio1fs1w9a2koaa2oy3gw97U1RHLTI3NA==1wxpkjriexfd8hef9j4pv53vnxhj8j3c4hghct7y2af28j3qcaxl337jor7qkqy8">
                             
                              </tbody>
                            </table>
                            
                             </div>
                    
                                
                <div id="history_log" style="float: right; width: 50%;">
                
                &nbsp;
                
                </div>
                
                
        <!--<table class="data table table-striped no-margin heightment" border="1" style="float: right; width: 50%; border: none;">
          
          &nbsp;
          
        </table>-->  
                            
                            
              
                          </div>
                          
                        </div>
                      </div>
                      
                      
                    </div>
            
            <!-- /.card -->
            </div>

 		</div>

 		</div>



    </section>
    <!-- /.content -->
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\wamp64\www\l6app\resources\views/admin/program_detail.blade.php ENDPATH**/ ?>