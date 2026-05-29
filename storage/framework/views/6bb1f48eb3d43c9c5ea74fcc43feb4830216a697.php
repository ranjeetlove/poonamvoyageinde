<?php $__env->startSection('title','blog voyage inde découvrez nos lieux populaires
'); ?>
<?php $__env->startSection('description','Obtenez des informations détaillées sur les voyages en Inde avec un guide, ses attractions touristiques telles que la faune, les stations de montagne, les plages, l aventure, les pèlerins et les circuits inde   , 
'); ?>
<?php $__env->startSection('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage'); ?>
<?php $__env->startSection('content'); ?>

      <div class="page-title-area ptb2-100">
         <div class="container">
            <div class="page-title-content">
               <h1>Blogs</h1>
               <ul>
                  <li class="item"><a href="<?php echo e(route('index')); ?>">Accueil</a></li>
                  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Blogs</a></li>
               </ul>
            </div>
         </div>

         <div class="bg-image">
           

            <img src="<?php echo e(asset('uploads/banners/'.$banner->image)); ?>" alt="Demo Image">
         </div>
      </div>



   <!--- Blog Start -->

      <section id="blog" class="blog-section pt-100 pb-70">
         <div class="container">
            <!-- <div class="section-title">
               <h2>Nos Blogs</h2>
			 </div> -->
			 <div class="row">
                 <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                      <div class="item-single mb-30">
                           <div class="image">
                            <img src="<?php echo e(asset('uploads/blog/'.$blog->image)); ?>" alt="">
                           </div>
                           <div class="content">
                              <ul class="info-list">
                                 <li><i class='bx bx-calendar'></i><?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('F j, Y')); ?></li>
                                 <li><i class='bx bx-tag'></i><?php echo e($blog->category); ?></li>
                              </ul>
                              <h3>
                              <a href="<?php echo e(route('blogdetails', $blog->slug)); ?>"><?php echo e($blog->title); ?></a>
                              </h3>
                             <p>
                                 <?php echo Str::limit(
                                    html_entity_decode(strip_tags($blog->content)),
                                    90
                                 ); ?>

                              </p>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="<?php echo e(asset('frontend/assets/img/blog/author1.jpg')); ?>" alt="Demo Image">
                                       <span>By - <?php echo e(implode(' ', array_slice(explode(' ', $blog->posted_by), 0, 2))); ?></span>
                                    </div>
                                 </li>
								  <li>
									  <a href="<?php echo e(route('blogdetails',$blog->slug)); ?>" class="btn-primary">Lire Plus</a>
								  </li>
                              </ul>
                           </div>
                        </div>
				 </div>
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			 </div>
		 </div>
      </section>
<!-- Tours and Travels start -->
      <section class="tour-travel">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tour-bg">
                     <div class="tour-travel-home">
                        <h2>India travel blog discover our popular places</h2>
                        <h6>Get detailed information about India travel with a guide, tourist attractions such as wildlife, hill stations, beaches, adventure, pilgrims and India tours</h6>
                       
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->
<!--- Blog End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/blog.blade.php ENDPATH**/ ?>