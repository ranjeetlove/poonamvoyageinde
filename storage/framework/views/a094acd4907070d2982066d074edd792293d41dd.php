
<?php $__env->startSection('content'); ?>

		  <div class="page-title-area ptb2-100">
			 <div class="container">
				<div class="page-title-content">
				   <h1>Privacy Policy</h1>
				   <ul>
					  <li class="item"><a href="<?php echo e(route('index')); ?>">Accueil</a></li>
					  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Privacy Policy</a></li>
				   </ul>
				</div>
			 </div>

			 <div class="bg-image">
				<img src="<?php echo e(asset('uploads/banners/'.$banner->image)); ?>" alt="Demo Image">
			 </div>
		  </div>





	  <hr>
      <section id="about" class="about-section about-style-three ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12m-auto">
                  <div class="about-content">
                     <div class="row">
                        <div class="col-12">
                           <h2>
                              Privacy Policy
                           </h2>

                           <p>
                              Travel has helped us to understand the meaning of life and it has
							  helped us become better people. Each time we travel, we see the
							  world with new eyes.Travel has helped us to understand the meaning
							  of life and it has helped us become better people. Each time we
							  travel, we see the world with new eyes.Travel has helped us to
							  understand the meaning of life and it has helped us.
                           </p>
                        </div>
                     </div>


                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-1"><img src="<?php echo e(asset('frontend/assets/img/shape1.png')); ?>" alt="Background Shape"></div>
         <div class="shape shape-2"><img src="<?php echo e(asset('frontend/assets/img/shape2.png')); ?>" alt="Background Shape"></div>
         <div class="shape shape-3"><img src="<?php echo e(asset('frontend/assets/img/shape3.png')); ?>" alt="Background Shape"></div>
         <div class="shape shape-4"><img src="<?php echo e(asset('frontend/assets/img/shape4.png')); ?>" alt="Background Shape"></div>
      </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/privacy-policy.blade.php ENDPATH**/ ?>