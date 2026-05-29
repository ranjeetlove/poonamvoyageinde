
<?php $__env->startSection('title','Avis agence | Poonam Voyage Inde
'); ?>
<?php $__env->startSection('description','les avis des clients khusipal singh guide , agence de voyage spécialiste du  voyage sur mesure  , 
'); ?>
<?php $__env->startSection('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage'); ?>
<?php $__env->startSection('content'); ?>
      <div class="page-title-area ptb2-100" style="height:300px">
         <div class="container">
            <div class="page-title-content">
               <!--<h1>Commentaires</h1>-->
               <ul>
                 <!-- <li class="item"><a href="<?php echo e(route('index')); ?>">Accueil</a></li>-->
                 <!-- <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Commentaires</a></li>-->
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="<?php echo e(asset('uploads/banners/'.$banner->image)); ?>" alt="Demo Image">
         </div>
      </div>




    <section id="team" class="team-section pt-100 pb-70">
         <div class="container">
               <div class="section-title">
                  <h2>Rétroaction</h2>
              </div>
            <div class="row">
               <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-3 col-md-6">
                     <div class="item-single mb-30 comment-img-fix">
                        <div class="image">
                           <img src="<?php echo e(asset('uploads/testimonials/'.$testimonial->image)); ?>" alt="Demo Image" >
                        </div>
                        <div class="content">
                           <div class="title">
                              <h3>
                                 <a href="<?php echo e(route('commentsdetails',$testimonial->slug)); ?>"><?php echo e(\Str::limit($testimonial->comment_head, 55)); ?></a>
                              </h3>
                              <!-- <span><?php echo Str::limit($testimonial->comment_content, 60); ?></span> -->
                              <?php echo Str::limit(
                                    html_entity_decode(strip_tags($testimonial->comment_content)),
                                    55
                                 ); ?>

                              </br></br>      
                              <button onclick="location.href = '<?php echo e(route('commentsdetails',$testimonial->slug)); ?>';" type="button" class="btn btn-sm btn-danger">Lire Plus</button>
                           </div>

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
                        <h2>Avis de l'agence | Poonam Voyage Inde</h2>
                        <h6>
Avis et témoignages clients. Retours et commentaires de l'agence. Meilleur organisateur de circuits et de voyages en Inde.</h6>
                        <p>Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde, Circuit touristique Inde</p>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/comments.blade.php ENDPATH**/ ?>