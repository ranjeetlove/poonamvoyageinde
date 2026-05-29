
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <?php if(session()->has('success')): ?>
                                      <div class="alert alert-success">
                                          <?php echo e(session()->get('success')); ?>

                                      </div>
                                  <?php endif; ?>
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Banners</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
              <?php if(Session::has('error')): ?>
              <div class="alert alert-danger m-2">
                  <button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo e(Session::get('error')); ?>

              </div>
          <?php endif; ?>
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="<?php echo e(url('admin/banners/store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group mt-2">
                        <label for="bannername">Banner Name</label>
                            <select name="name"  class="form-control">
                                <option value="">Select Banner Name</option>
                                <option value="Home Banner 1">Home Page Banner 1</option>
                                <option value="Home Banner 2">Home Page Banner 2</option>
                                <option value="Home Banner 3">Home Page Banner 3</option>
                                <option value="Home Banner 4">Home Page Banner 4</option>
                                <option value="About Us Banner">About Us</option>
                                <option value="Tailor-Made Trip Banner">Tailor-Made Trip To India</option>
                                <option value="Comments Banner">Comments</option>
                                <option value="Blog Banner">Blog</option>
                                <option value="Contact Us Banner">Contact Us</option>
                                <option value="Privacy Policy Banner">Privacy Policy</option>
                                <option value="Terms and Conditions Banner">Terms and Conditions</option>
                          </select>
                            
                              <?php if($errors->has('name')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>
                          <div class="form-group mt-2">
                            <label for="image">Banner Image</label>

                                <input type="file" name="image" class="form-control" id="image" required>
                                  <?php if($errors->has('image')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('image')); ?></strong>
                                      </span>
                                  <?php endif; ?>

                          </div>
                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" checked />
                              <?php if($errors->has('status')): ?>
                                <span class="required">
                                    <strong><?php echo e($errors->first('status')); ?></strong>
                                </span>
                            <?php endif; ?>
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" />
                              <?php if($errors->has('status')): ?>
                                <span class="required">
                                    <strong><?php echo e($errors->first('status')); ?></strong>
                                </span>
                            <?php endif; ?>
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create Banner</button>

                          </div>
                    </div>
                 </div>
                </div>
              </form>
          </div>
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/banners/create.blade.php ENDPATH**/ ?>