<?php $__env->startSection('content'); ?>
<style>
   .add-more-day {
      display: flex;
      justify-content: space-between;
      align-items: start;
   }
   .w-100 { width: 100%; }
   .add-more-btn {
      background: #1a668c;
      color: #fff;
      width: 120px;
      padding: 6px;
      margin: 30px 10px;
   }
   .added-image {
      margin-top: 10px;
   }
   .error strong {
      color: red;
      font-weight: 500;
      font-size: 14px;
   }
</style>

<section class="content">
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <div class="card card-primary">
            <div class="card-header">
               <h3 class="card-title">Edit Tour</h3>
            </div>

            <?php if(Session::has('flash_success')): ?>
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">×</button>
               <?php echo e(Session::get('flash_success')); ?>

            </div>
            <?php endif; ?>

            <form enctype="multipart/form-data" role="form" id="myform" method="post" action="<?php echo e(route('tour-edit')); ?>">
               <?php echo csrf_field(); ?>
               <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
               <input type="hidden" name="region_id" value="<?php echo e($data->region_id); ?>">

               <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group mt-2">
                     <label>Region</label>
                     <input type="text" value="<?php echo e($data->region->region); ?>" class="form-control" readonly>
                    </div>
                  </div>

                  <!-- -->
               <?php
               $selectedHotals = is_string($data->hotals) 
               ? explode(',', $data->hotals) 
               : ($data->hotals ?? []);

            ?>

<div class="col-sm-6">
   <div class="form-group mt-2">
      <label for="hotals">Hotels</label>
      <select name="hotals[]" class="form-control selectpicker" multiple data-live-search="true" data-actions-box="true" data-selected-text-format="count > 1" data-width="100%">
         <?php $__currentLoopData = $hotals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($hotal->id); ?>" 
                <?php echo e(in_array($hotal->id, $selectedHotals) ? 'selected' : ''); ?>>
                <?php echo e($hotal->name); ?> (<?php echo e($hotal->city); ?>)
            </option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>

      <?php if($errors->has('hotals')): ?>
         <span class="error text-danger">
            <strong>Please select at least one hotel</strong>
         </span>
      <?php endif; ?>
   </div>
</div>


                  <div class="col-sm-6 mt-2">
                     <label>Tour Name</label>
                     <input type="text" name="title" class="form-control" value="<?php echo e($data->title); ?>">
                  </div>
                  <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Title</label>
                              <input type="text" name="metaTitle" class="form-control" id="metaTitle" value="<?php echo e($data->meta_title); ?>">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Keywords</label>
                              <input type="text" name="metaKeywords" class="form-control" id="metaKeywords" value="<?php echo e($data->meta_keywords); ?>">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Meta Description</label>
                              <textarea rows="2" class="form-control" id="metaDescription" name="metaDescription" value="<?php echo e($data->meta_description); ?>" ><?php echo e($data->meta_description); ?></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group mt-2">
                              <label for="bannername">Slug</label>
                              <input type="text" name="slug" class="form-control" id="slug" value="<?php echo e($data->slug); ?>">
                               <?php if($errors->has('slug')): ?>
                              <span class="error">
                              <strong><?php echo e($errors->first('slug')); ?></strong>
                              </span>
                              <?php endif; ?>
                           </div>
                        </div>

                  <div class="col-sm-6 mt-2">
                     <label>Banner Image</label>
                     <input type="file" name="banner" class="form-control">
                     <?php if($data->banner): ?>
                     <img src="<?php echo e(asset('uploads/tour/banner/'.$data->banner)); ?>" width="150" class="mt-2">
                     <?php endif; ?>
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Total Days</label>
                     <input type="text" name="day" class="form-control" value="<?php echo e($data->day); ?>">
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Total Nights</label>
                     <input type="text" name="night" class="form-control" value="<?php echo e($data->night); ?>">
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Price</label>
                     <input type="text" name="price" class="form-control" value="<?php echo e($data->price); ?>">
                  </div>

                  <div class="col-sm-6 mt-2">
                     <label>Image</label>
                     <input type="file" name="image" class="form-control">
                     <?php if($data->image): ?>
                     <img src="<?php echo e(asset('uploads/tour/image/'.$data->image)); ?>" width="150" class="mt-2">
                     <?php endif; ?>
                  </div>

                  <div class="col-sm-12 mt-2">
                     <label>Description</label>
                     <textarea name="content" id="content" rows="5" class="form-control" value="<?php echo e($data->content); ?>"><?php echo $data->content; ?></textarea>
                  </div>

                   <div class="col-sm-12 mt-2">
                     <label>Highlight <span style="color:red; font-size:12px">Note: please add highlight with using ; (highlight 1; highlight 2; etc...)</span></label>
                     <textarea name="highlights" id="highlights" rows="5" class="form-control" value="<?php echo e($data->highlights); ?>"><?php echo $data->highlights; ?></textarea>
                  </div>
                  
                  <div class="col-sm-6 mt-2">
                     <label>includes <span style="color:red; font-size:12px">Note: please add includes with using ; (includes 1; includes 2; etc...)</span></label>
                     <textarea name="includes" id="includes" rows="5" class="form-control" value="<?php echo e($data->includes); ?>"><?php echo $data->includes; ?></textarea>
                  </div>
                  
                  <div class="col-sm-6 mt-2">
                     <label>Not includes <span style="color:red; font-size:12px">Note: please add not includes with using ; (not includes 1; not includes 2; etc...)</span></label>
                     <textarea name="notIncludes" id="notIncludes" rows="5" class="form-control" value="<?php echo e($data->notIncludes); ?>"><?php echo $data->notIncludes; ?></textarea>
                  </div>
                  

                  
                  <div class="col-sm-12 add-more-day">
                     <div id="point-div" class="w-100">
                        <label class="mt-3 d-block">Itinerary (Days)</label>
                        <div class="form-group mt-2" id="day-div">
                           <?php
                              $dayCount = optional($data->daychart)->count() ?? 0;
                           ?>
                           <?php $__currentLoopData = $data->daychart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="added-image <?php echo e($index != 0 ? 'position-relative' : ''); ?>" style="border: 1px solid #ccc; padding: 15px; margin-bottom: 10px;">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <label>Day Title</label>
                                    <input type="text" name="day_head[]" class="form-control" value="<?php echo e($day->day_head); ?>">
                                 </div>
                                 <div class="col-sm-6">
                                    <label>Day Image</label>
                                    <select name="dayWiseimage[]" class="form-control">
                                                <option value="">Select City Image</option>
                                                <?php $__currentLoopData = $cityImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($option['value']); ?>" 
                                                   <?php echo e($day->day_img == $option['value'] ? 'selected' : ''); ?>>
                                                   <?php echo e($option['label']); ?>-<?php echo e($option['value']); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </select>
                                    <?php if($day->day_img): ?>
                                    <img src="<?php echo e(asset('uploads/tour/image/'.$day->day_img)); ?>" width="120" class="mt-2">
                                    <?php endif; ?>
                                 </div>
                              </div>
                              <textarea rows="5" id="day_content_<?php echo e($index); ?>" name="day_content[]" class="form-control mt-2"><?php echo e($day->day_content); ?></textarea>
                               <?php if($index != 0): ?>
                                 <button type="button" class="removeRadio fa fa-minus-circle fa-2x" 
                                 style="position: absolute; top: 5px; right: 10px; border: none; background: transparent; color: #dc3545;"></button>
                              <?php endif; ?> 
                           </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <label class="mt-3 d-block">Status</label>
                        <label>
                           <input type="radio" class="status" value="Active" name="status" <?php echo e($data->status == 'Active' ? 'checked' : ''); ?>> Active
                        </label>
                        <label>
                           <input type="radio" class="status" value="InActive" name="status" <?php echo e($data->status == 'InActive' ? 'checked' : ''); ?>> Inactive
                        </label>
                        
                        <div class="form-group mt-2">
                          <label for="">Schema (JSON-LD)</label>
                          <textarea rows="10" class="form-control" id="schema" name="schema"><?php echo e($data->c_schema ?? old('schema')); ?></textarea>
                          <?php if($errors->has('schema')): ?>
                            <span class="error">
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
                        <div class="form-group mt-3">
                           <button id="submit" type="submit" class="btn btn-primary">Update Tour</button>
                        </div>
                     </div>

                     <div>
                        <button class="btn add-more-btn" type="button" onclick="add()"><i class="fa fa-plus-circle"></i> Add More</button>
                     </div>
                  </div>
               </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
let dayIndex = <?php echo e($dayCount); ?>;

 $(document).ready(function () {
        if (dayIndex > 0) {
            for (let i = 1; i <= dayIndex; i++) {
                let textareaId = 'day_content_' + i;
                if (document.getElementById(textareaId) && !CKEDITOR.instances[textareaId]) {
                    CKEDITOR.replace(textareaId);
                }
            }
            dayIndex--;
        }
});

function add() {
   console.log(dayIndex);
    dayIndex++;
    console.log(dayIndex);
    var div = $("<div />");
    div.html(GetDynamicDayHtml(dayIndex));
    $("#day-div").append(div);

    // Initialize CKEditor for the new textarea
    CKEDITOR.replace('day_content_' + dayIndex);
}

$("body").on("click", ".removeRadio", function () {
    let textareaId = $(this).siblings("textarea").attr("id");
    if (CKEDITOR.instances[textareaId]) {
        CKEDITOR.instances[textareaId].destroy(true);
    }
    $(this).closest(".added-image").remove();
});



function GetDynamicDayHtml(index) {
   let textareaId = 'day_content_' + index;
   return `
   <div class="added-image position-relative" style="border:1px solid #ccc; padding:15px; margin-bottom:15px;">
      <div class="row">
         <div class="col-sm-6">
            <label>Day Title</label>
            <input type="text" name="day_head[]" class="form-control"><br>
         </div>
         <div class="col-sm-6">
            <label>Day Image</label>
            <select name="dayWiseimage[]" class="form-control">
                                                <option value="">Select City Image</option>
                                                <?php $__currentLoopData = $cityImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($option['value']); ?>"><?php echo e($option['label']); ?>-<?php echo e($option['value']); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </select>
         </div>
      </div>
      <textarea rows="5" id="${textareaId}" name="day_content[]" class="form-control mt-2" style="padding-right: 50px;"></textarea>
      <button type="button" class="removeRadio fa fa-minus-circle fa-2x" 
         style="position: absolute; top: 5px; right: 10px; border: none; background: transparent; color: #dc3545;"></button>
   </div>`;
}

$("body").on("click", ".removeRadio", function () {
   $(this).closest(".added-image").remove();
});
</script>

<script>
   $(function () {
      $('.selectpicker').selectpicker();
   });
</script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/admin/tour/edit.blade.php ENDPATH**/ ?>