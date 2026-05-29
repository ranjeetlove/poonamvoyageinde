
<?php $__env->startSection('content'); ?>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
                <h3 class="card-title">Create Blog</h3>
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
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="<?php echo e(url('admin/blog/store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group mt-2">
                        <label for="">Posted By</label>
                            <input type="text" name="posted_by" class="form-control" id=""value="<?php echo e(old('posted_by')); ?>" required>
                              <?php if($errors->has('posted_by')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('posted_by')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>
                      <div class="form-group mt-2">
                        <label for="">Posted Date</label>
                            <input type="text" name="posted_date" class="form-control" id=""value="<?php echo e(old('posted_date')); ?>" required>
                              <?php if($errors->has('posted_date')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('posted_date')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>
                      <div class="form-group mt-2">
                        <label for="image">Image</label>

                            <input type="file" name="image" class="form-control" id="image" required>
                              <?php if($errors->has('image')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('image')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>


                      <div class="form-group mt-2">
                        <label for="">Category</label>
                            <input type="text" name="category" class="form-control" id=""value="<?php echo e(old('category')); ?>" required>
                              <?php if($errors->has('category')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('category')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Title</label>
                            <input type="text" name="title" class="form-control" id=""value="<?php echo e(old('title')); ?>" required>
                              <?php if($errors->has('title')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('title')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control" id=""value="<?php echo e(old('meta_description')); ?>" required>
                              <?php if($errors->has('meta_description')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('meta_description')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" id=""value="<?php echo e(old('meta_keywords')); ?>" required>
                              <?php if($errors->has('meta_keywords')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('meta_keywords')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Content</label>
                        <textarea rows="5" class="form-control" id="content" name="content" required></textarea>
                              <?php if($errors->has('content')): ?>
                                  <span class="required">
                                      <strong><?php echo e($errors->first('content')); ?></strong>
                                  </span>
                              <?php endif; ?>

                      </div>

                      <div class="form-group mt-2">
                        <label for="">Schema (JSON-LD)</label>
                        <textarea rows="10" class="form-control" id="schema" name="schema"><?php echo e(old('schema')); ?></textarea>
                        <?php if($errors->has('schema')): ?>
                          <span class="required">
                            <strong><?php echo e($errors->first('schema')); ?></strong>
                          </span>
                        <?php endif; ?>
                      </div>

                      <div class="form-group mt-2">
                        <label for="">FAQ</label>
                        <div id="faq-container">
                          <!-- FAQ rows will be added here -->
                        </div>
                        <button type="button" id="add-faq" class="btn btn-secondary mt-2">Add FAQ</button>
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
                            <button id="submit" type="submit" class="btn btn-primary">Create Blog</button>

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
        CKEDITOR.replace( 'content' );
        </script>
    <script>
        $(document).ready(function() {
            $('#add-faq').click(function() {
                var row = '<div class="faq-row mb-3">' +
                    '<div class="form-group">' +
                        '<label>Question</label>' +
                        '<input type="text" name="faq_questions[]" class="form-control" required>' +
                    '</div>' +
                    '<div class="form-group">' +
                        '<label>Answer</label>' +
                        '<textarea rows="3" name="faq_answers[]" class="form-control" required></textarea>' +
                    '</div>' +
                    '<button type="button" class="btn btn-danger remove-faq">Remove</button>' +
                '</div>';
                $('#faq-container').append(row);
            });

            $(document).on('click', '.remove-faq', function() {
                $(this).closest('.faq-row').remove();
            });
        });
    </script>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/blog/create.blade.php ENDPATH**/ ?>