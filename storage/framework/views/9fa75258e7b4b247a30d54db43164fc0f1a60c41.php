<?php $__env->startSection('title',($region->meta_title)); ?>
<?php $__env->startSection('description',($region->meta_description)); ?>
<?php $__env->startSection('keywords',($region->meta_keywords)); ?>
<?php $__env->startSection('content'); ?>

      <div class="page-title-area ptb2-100">
         <div class="container">
            <div class="page-title-content">
               <h1><?php echo e($region->heading); ?></h1>
               <ul>
                  <li class="item"><a href="<?php echo e(route('index')); ?>">ACCUEILLIR</a></li>
                  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Visite Sur mesure En Inde Du Nord Avec Guide</a></li>
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="<?php echo e(asset('uploads/regions/'.$region->banner)); ?>" alt="Demo Image">
         </div>
      </div>



 <section id="destination" class="destination-section pt-100 pb-70 bg-light">
         <div class="container">
            <div class="section-title">
               <h2><?php echo e($region->title); ?></h2>
               <?php echo $region->content; ?>

            </div>

            <div class="row filtr-container">

			  <!-- List Start -->
           <?php $__currentLoopData = $region->tour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                  <div class="item-single mb-30">
                     <div class="image" >
                        <img src="<?php echo e(asset('/uploads/tour/image/'. $tr->image)); ?>" alt="Demo Image">
                     </div>
                     <div class="content">
                        <ul class="list">
                            <li><span class="location"><i class='bx bx-map'></i> <?php echo e($tr->region->region); ?> </span></li>
                            <li><button onclick="location.href = '<?php echo e(route('contactus')); ?>';" type="button" class="btn btn-sm btn-primary">prix: <?php echo e($tr->price); ?></button></li>
                         </ul>

                        <h3>
                           <a href="<?php echo e(route('destinationdetails',['slug1'=>$tr->region->slug,'slug2'=>$tr->slug])); ?>"> <?php echo e($tr->title); ?> </a>
                        </h3>
                        <div class="review">
                           <i class='bx bx-smile'></i>
                           <span><?php echo e($tr->day); ?> </span>
                           <span>Jour</span>
                        </div>

						 <div class="review">
                           <i class='bx bx-smile'></i>
                           <span><?php echo e($tr->night); ?></span>
                           <span>Nuit</span>
                        </div>
                        <p>
                           <?php
										$check=strip_tags($tr->content) ;
									?>
                                        <p> <?php echo e(\Illuminate\Support\Str::limit($check, 50)); ?></p>
                        </p>
                        <hr>
                        <ul class="list">
                           <li><button onclick="location.href = '<?php echo e(route('destinationdetails',['slug1'=>$tr->region->slug,'slug2'=>$tr->slug])); ?>';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>
                           <li><button onclick="location.href = '<?php echo e(route('contactus')); ?>';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                        </ul>
                     </div>
                     <div class="spacer"></div>
                  </div>
               </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			  <!-- List End -->


			  


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
                        <h2>Voyage au Gujarat avec guide | Poonam Travel India</h2>
                        <h6>Voyager au Gujarat est désormais facile avec Poonam Voyage. Découvrez les traditions, la culture et les paysages sauvages de cette région fascinante. Commencez votre voyage dès aujourd’hui !</h6>
                        <p>Partez pour un voyage inoubliable en Inde du Nord. Le Gujarat vous ouvre ses portes avec ses temples majestueux, ses villes colorées, ses villages traditionnels et sa nature préservée.</p>
                        <p>Notre agence de voyage en Inde du Nord est spécialisée dans les séjours sur mesure. Profitez d’un guide local, d’itinéraires authentiques et d’une organisation personnalisée pour vivre une expérience unique au cœur de l’Inde.</p>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->

	  <!-- Destination End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/destination-list.blade.php ENDPATH**/ ?>