<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Testimonial</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
              

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="<?php echo e(route('testimonial-edit')); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>" class="form-control" id="text">
                          <div class="form-group mt-2">
                            <label for="bannername"> Country Name</label>
                                 <input type="text" name=" country" class="form-control" id=""value="<?php echo e($data->country); ?>" >
                                  <?php if($errors->has(' country')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first(' country')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Testimonial Name</label>
                                 <input type="text" name="name" class="form-control" id=""value="<?php echo e($data->name); ?>" >
                                  <?php if($errors->has('name')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('name')); ?></strong>
                                      </span>
                                  <?php endif; ?>

                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Designation</label>
                                 <input type="text" name="designation" class="form-control" id=""value="<?php echo e($data->designation); ?>" >
                                  <?php if($errors->has('designation')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('designation')); ?></strong>
                                      </span>
                                  <?php endif; ?>

                          </div>
                          
                          <div class="form-group mt-2">
                            <label for="image">Image</label>

                                <input type="file" name="image" class="form-control" id="image" >
                                  <?php if($errors->has('image')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('image')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                          </div>

                        <div class="form-group mt-2">
                        <label for="">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" id=""value="<?php echo e($data->meta_keywords); ?>" required>
                              <?php if($errors->has('meta_keywords')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('meta_keywords')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control" id=""value="<?php echo e($data->meta_description); ?>" required>
                              <?php if($errors->has('meta_description')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('meta_description')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                          <div class="form-group mt-2">
                            <label for="bannername">Comment head</label>
                                 <input type="text" name="comment_head" class="form-control" id=""value="<?php echo e($data->comment_head); ?>" required>
                                  <?php if($errors->has('comment_head')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('comment_head')); ?></strong>
                                      </span>
                                  <?php endif; ?>

                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Comment content</label>
                            <textarea rows="5" class="form-control" id="comment_content" name="comment_content" ><?php echo e($data->comment_content); ?></textarea>
                                  <?php if($errors->has('comment_content')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('comment_content')); ?></strong>
                                      </span>
                                  <?php endif; ?>

                          </div>
                          <div class="form-group mt-2">
                            <label for="bannername">Rating</label>
                                 <input type="text" name="rating" class="form-control" id=""value="<?php echo e($data->rating); ?>" required>
                                  <?php if($errors->has('rating')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('rating')); ?></strong>
                                      </span>
                                  <?php endif; ?>

                          </div>

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
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update testimonial</button>
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
        CKEDITOR.replace( 'comment_content' );
    </script>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/testimonial/edit.blade.php ENDPATH**/ ?>