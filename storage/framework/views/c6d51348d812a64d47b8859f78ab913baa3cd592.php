
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
              

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="<?php echo e(route('about-edit')); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>" class="form-control" id="text">
                            <label for="image">Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo e($data->name); ?>" ><br>
                              <label for="image">Designation</label>
                              <input type="text" class="form-control" name="designation" value="<?php echo e($data->designation); ?>" ><br>
                              <label for="image">Update Owner Image</label>

                              <input type="file" name="image" class="form-control" id="image" value="<?php echo e($data->image); ?>">
                                <?php if($errors->has('image')): ?>
                                    <span class="required">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                <?php endif; ?>
                              <label for="image">About Owner</label>
                              <input type="text" class="form-control" name="about_owner" value="<?php echo e($data->about_owner); ?>" ><br>
                              <label for="image">About Heading</label>
                              <input type="text" class="form-control" name="about_head" value="<?php echo e($data->about_head); ?>" ><br>
                              <label for="image">About Content</label>
                              <textarea rows="5" class="form-control" name="about_content" required><?php echo e($data->about_content); ?></textarea>
                              
                              <label for="image">Status</label>
                              <div class="form-group mt-2">
                                <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" <?php if($data->status == 'Active'): ?> checked <?php endif; ?>/>
                              <?php if($errors->has('status')): ?>
                                <span class="required">
                                    <strong><?php echo e($errors->first('status')); ?></strong>
                                </span>
                            <?php endif; ?>
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" <?php if($data->status == 'InActive'): ?> checked <?php endif; ?> />
                              <?php if($errors->has('status')): ?>
                                <span class="required">
                                    <strong><?php echo e($errors->first('status')); ?></strong>
                                </span>
                            <?php endif; ?>
                              Inactive
                          </label>
                        </div>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update About</button>
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
    <script>
      CKEDITOR.replace( 'about_content' );
    </script> 
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/about/edit.blade.php ENDPATH**/ ?>