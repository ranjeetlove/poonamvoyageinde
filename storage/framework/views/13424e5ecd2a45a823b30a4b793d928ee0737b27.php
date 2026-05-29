
<?php $__env->startSection('content'); ?>
      <div class="page-title-area ptb2-100">
         <div class="container">
            <div class="page-title-content">
               <h1>Blog Details</h1>
               <ul>
                  <li class="item"><a href="https://www.poonamvoyageinde.com/">Home</a></li>
                  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Blog Details</a></li>
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="<?php echo e(asset('uploads/banners/'.$banner->image)); ?>" alt="Demo Image">
         </div>
      </div>




           <section class="blog-details-section pt-100 pb-70">
         <div class="container">

            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="blog-details-desc mb-30">
                     <div class="image mb-20">
                        
                        <img src="<?php echo e(isset($blog) && $blog->image ?
                        asset('uploads/blog/'.$blog->image) : asset('uploads/tour/image/no-image.jpg')); ?>"
                        alt="">
                     </div>
                     <ul class="info-list mb-20">
                        <li><i class='bx bx-calendar'></i> <?php echo e(!empty($blog->posted_by) ? $blog->posted_by : ''); ?></li>
                        <li><i class='bx bx-tag'></i><?php echo e(!empty($blog->category) ? $blog->category : ''); ?></li>
                     </ul>
                     <div class="content mb-20">
                        <h3><?php echo e(!empty($blog->title) ? $blog->title : ''); ?></h3>
                        <p><?php echo !empty($blog->content) ? $blog->content : ''; ?></p>
                     </div>
                  </div>
               </div>


               <div class="col-lg-4 col-md-12">
                <?php echo $__env->make('frontend.layout.side-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <aside class="widget-area">
                     <div class="widget widget-article mb-30">
                        <h3 class="sub-title">Recent Blog</h3>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="article-item">
                           <div class="image">
                              <img src="<?php echo e(asset('uploads/blog/'.$blog->image)); ?>" alt="Demo Image" />
                           </div>
                           <div class="content">
                              <h3>
                                 <a href="<?php echo e(route('blogdetails',$blog->slug)); ?>"><?php echo e(!empty($blog->title) ? $blog->title : ''); ?></a>
                              </h3>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="<?php echo e(asset('frontend/assets/img/blog/author1.jpg')); ?>" alt="Demo Image">
                                       <span>By - <?php echo e(!empty($blog->posted_by) ? $blog->posted_by : ''); ?></span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						


                     </div>

                  </aside>
               </div>
            </div>
         </div>
      </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/blog-details.blade.php ENDPATH**/ ?>