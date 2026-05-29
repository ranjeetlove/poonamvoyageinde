
<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Region</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if(Session::has('flash_success')): ?>
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo e(Session::get('flash_success')); ?>

                  </div>
              <?php endif; ?>
              

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="<?php echo e(route('region-edit')); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group mt-2">
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>" class="form-control" id="text">
                              <input type="button" class="form-control" value="<?php echo e($data->region); ?>" readonly><br>                              
                            <label for="banner">Update Current Banner</label>
                                <input type="file" name="banner" class="form-control" id="banner" value="<?php echo e($data->banner); ?>"><br>
                                  <?php if($errors->has('banner')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('banner')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                            <label for="image">Update Homepage Thumbnail</label>
                                <input type="file" name="image" class="form-control" id="image" value="<?php echo e($data->image); ?>"><br>
                                  <?php if($errors->has('image')): ?>
                                      <span class="required">
                                          <strong><?php echo e($errors->first('image')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                            <label for="image">Banner Heading</label>
                                <input type="text" class="form-control" name='heading' value="<?php echo e($data->heading); ?>" ><br>  
                            <label for="image">Meta Title</label>
                                <input type="text" class="form-control" name='meta_title' value="<?php echo e($data->meta_title); ?>" ><br>
                            <label for="image">Meta Description</label>
                                <input type="text" class="form-control" name='meta_description' value="<?php echo e($data->meta_description); ?>" ><br> 
                            <label for="image">Meta Keywords</label>
                                <input type="text" class="form-control" name='meta_keywords' value="<?php echo e($data->meta_keywords); ?>" ><br>     
                             <label for="image">Title of the page</label>
                                <input type="text" class="form-control" name='title' value="<?php echo e($data->title); ?>" ><br>            
                            <label for="image">Content of the page</label>
                                <textarea rows="20" class="form-control" name="content" ><?php echo e($data->content); ?></textarea><br>
                            <label for="rating">Rating</label>                           
                              <select name="rating">                                
                                <option value="<?php echo e($data->rating); ?>"><?php echo e($data->rating); ?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select><br>
                              <div class="form-group mt-2">
                                <label for="">Schema (JSON-LD)</label>
                                <textarea rows="10" class="form-control" id="schema" name="schema"><?php echo e($data->c_schema ?? old('schema')); ?></textarea>
                                <?php if($errors->has('schema')): ?>
                                  <span class="required">
                                    <strong><?php echo e($errors->first('schema')); ?></strong>
                                  </span>
                                <?php endif; ?>
                              </div>

                              <div class="form-group mt-2">
                                <label for="">FAQ</label>
                                <div id="faq-container">
                                  <?php if(isset($data->faq) && $data->faq): ?>
                                    <?php $faqs = json_decode($data->faq, true); ?>
                                    <?php if(isset($faqs['questions']) && is_array($faqs['questions'])): ?>
                                      <?php $__currentLoopData = $faqs['questions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="faq-row mb-3">
                                          <div class="form-group">
                                            <label>Question</label>
                                            <input type="text" name="faq_questions[]" class="form-control" value="<?php echo e($question); ?>" required>
                                          </div>
                                          <div class="form-group">
                                            <label>Answer</label>
                                            <textarea rows="3" name="faq_answers[]" class="form-control" required><?php echo e($faqs['answers'][$index] ?? ''); ?></textarea>
                                          </div>
                                          <button type="button" class="btn btn-danger remove-faq">Remove</button>
                                        </div>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                  <?php endif; ?>
                                </div>
                                <button type="button" id="add-faq" class="btn btn-secondary mt-2">Add FAQ</button>
                              </div>
                            <label for="status">Status</label><br>                           
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
                            <button id="submit" type="submit" class="btn btn-primary">Update Region</button>
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
      $(document).ready(function() {
          $('#add-faq').click(function() {
              var row = '<div class=\"faq-row mb-3\">' +
                  '<div class=\"form-group\">' +
                      '<label>Question</label>' +
                      '<input type=\"text\" name=\"faq_questions[]\" class=\"form-control\" required>' +
                  '</div>' +
                  '<div class=\"form-group\">' +
                      '<label>Answer</label>' +
                      '<textarea rows=\"3\" name=\"faq_answers[]\" class=\"form-control\" required></textarea>' +
                  '</div>' +
                  '<button type=\"button\" class=\"btn btn-danger remove-faq\">Remove</button>' +
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/region/edit.blade.php ENDPATH**/ ?>