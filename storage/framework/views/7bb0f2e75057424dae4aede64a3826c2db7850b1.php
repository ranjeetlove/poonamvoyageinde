<?php $__env->startSection('content'); ?>
<style>
   .hotel-item {
   position: relative;
   overflow: hidden;
   border-radius: 12px;
   box-shadow: 0 4px 8px rgba(0,0,0,0.2);
   }
   .hotel-item img {
   width: 100%;
   height: 250px;
   object-fit: cover;
   display: block;
   }
   .hotel-name {
   position: absolute;
   top: 10px;
   left: 10px;
   background: rgba(0,0,0,0.6);
   color: #fff;
   padding: 8px 12px;
   border-radius: 6px;
   font-weight: bold;
   font-size: 16px;
   }
   .owl-carousel .owl-item {
   padding: 10px;
   }
</style>
<div class="page-title-area ptb2-100">
   <div class="container">
      <div class="page-title-content">
         <h1><?php echo e($tour->title); ?></h1>
         <ul>
            <li class="item"><a href="<?php echo e(route('index')); ?>">ACCUEILLIR</a></li>
            <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i><?php echo e($tour->title); ?></a></li>
         </ul>
      </div>
   </div>
   <div class="bg-image">
      <img src="<?php echo e(asset('uploads/tour/banner/'.$tour->banner)); ?>" alt="Demo Image">
   </div>
</div>
<!--- Destination Details Start  -->
<section class="destinations-details-section pt-100 pb-70">
   <div class="container-fluid">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="destination-details-desc mb-30">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="image mb-30">
                        <img src="<?php echo e(asset('uploads/tour/image/'.$tour->image)); ?>" alt="Demo Image" />
                     </div>
                  </div>
                  <div class="col-lg-6 details-package-title">
                     <h2>Destination</h2>
                     <?php
                     $previewLength = 400;
                     $fullContent = strip_tags($tour->content);
                     $preview = Str::limit($fullContent, $previewLength);
                     $remaining = Str::substr($fullContent, $previewLength);
                     ?>
                     <p class="read-more-text">
                        <?php echo $preview; ?>

                        <?php if(strlen($remaining) > 0): ?>
                        <span class="more-text" style="display: none;"><?php echo $remaining; ?></span>
                        <a href="javascript:void(0);" class="read-more-toggle">Lire plus...</a>
                        <?php endif; ?>
                     </p>
                     <h3 class="price-details-page">Price: <span>€ <?php echo e($tour->price); ?></span><span> / person</span></h3>
                     <h4>Nombre total de jours et de nuits: <?php echo e($tour->day); ?> Jours / <?php echo e($tour->night); ?> Nuits</h4>
                     <div class="rating-detail-page">
                        <h6>Rating: 
                           <span class="starColor">
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           <i class="bx bxs-star text-warning"></i>
                           </span>
                        </h6>
                     </div>
                     <br>
                     <button type="submit" data-bs-toggle="modal" data-bs-target="#contactQuary" class="themeBtn">Demander un devis</button>
                  </div>
               </div>
               <div class="row my-5">
                  <h2 class="mb-4 text-center">🌟 Moments forts du circuit</h2>
                  <div class="row g-4">
                        <?php
                        $highlights = $tour->highlights
                           ? explode('; ', $tour->highlights) 
                           : [];
                        ?>

                     <?php $__currentLoopData = $highlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $highlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-building highlight-icon"></i>
                           <div class="highlight-title"><?php echo e($highlight); ?></div>
                        </div>
                     </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row irritation-bg">
      <div class="itration-outer-box">
         <h2 class="text-center"> 🧭 Détail du voyage </h2>
         <div class="irritation-main">
            <?php $__currentLoopData = $dayCharts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tour-details__plan-single">
               <div class="tour-details__plan-count">
                  <?php echo e(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?>

               </div>
               <div class="tour-details__plan-content">
                  <div class="irritation-content">
                     <h3>Jour <?php echo e($index + 1); ?> : <?php echo e($day->day_head); ?></h3>
                     <?php
                     $previewLength = 500;
                     $fullText = strip_tags($day->day_content);
                     $preview = Str::limit($fullText, $previewLength);
                     $remaining = Str::substr($fullText, $previewLength);
                     ?>
                     <p class="read-more-text">
                        <?php echo $preview; ?>

                        <?php if(strlen($remaining) > 0): ?>
                        <span class="more-text" style="display: none;"><?php echo $remaining; ?></span>
                        <a href="javascript:void(0);" class="read-more-toggle">Lire plus...</a>
                        <?php endif; ?>
                     </p>
                  </div>
                  <div class="irritation-img">
                     <img src="<?php echo e(asset('uploads/tour/image/' . $day->day_img)); ?>" alt="Jour <?php echo e($index + 1); ?> Image" />
                  </div>
               </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
   <div class="container mt-5">
      <div class="row">
          <div class="col-lg-6 col-xs-12 mb-5">
            <h5 class="mb-4">🟢 Le prix comprend :</h5>
            <ul class="info-pack">
                  <?php
                     $includes = $tour->includes
                           ? explode('; ', $tour->includes) 
                           : [];
                     ?>

                  <?php $__currentLoopData = $includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><?php echo e($include); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
         <div class="col-lg-6 col-xs-12">
            <h5 class="mb-4">❌ Le prix ne comprend pas :</h5>
            <ul class="info-pack">
                 <?php
                     $notIncludes = $tour->notIncludes
                           ? explode('; ', $tour->notIncludes) 
                           : [];
                     ?>

                  <?php $__currentLoopData = $notIncludes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $notInclude): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><?php echo e($notInclude); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mb-5">
         <h2>🏨 Hôtels</h2>
         <!-- Carousel HTML -->
         <div class="owl-carousel hotalsSlider">
            <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="hotel-item">
               <img src="<?php echo e(asset('uploads/hotals/'.$hotel['image'])); ?>" alt="<?php echo e($hotel['name']); ?>">
               <div class="hotel-name"><?php echo e($hotel['name']); ?> (<?php echo e($hotel['city']); ?>)</div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
</section>
<div class="modal fade" id="contactQuary" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <div class="modal-header">
        <h3 class="sub-title">Obtenir Un Devis</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          <div class="main-form">
            <div class="comment-reply">
               <form class="pakage-details-page-form" action="<?php echo e(route('mail1')); ?>"  enctype="multipart/form-data" method="post" style="width:100%">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Région </label>
                        <div class="input-group">
                           <select class="form-select form-control" name="region" aria-label="Default select example">
                              <option selected>Sélectionner des Régions</option>
                              <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($region->region); ?>"><?php echo e($region->region); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Intérêts et activités </label>
                        <div class="input-group">
                           <select class="form-select form-control" name="interest" aria-label="Default select example">
                              <option selected>Sélectionner des Régions</option>
                              <option value="Aventure">Aventure</option>
                              <option value="Welfare">Welfare</option>
                              <option value="Culture">Culture</option>
                              <option value="En Immersion">En Immersion</option>
                              <option value="Événement ou Festival">Événement ou Festival</option>
                              <option value="Famille">Famille</option>
                              <option value="Randonnée & Trek">Randonnée & Trek</option>
                              <option value="Voyage Lent">Voyage Lent</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Type d'Hébergement </label>
                        <div class="input-group">
                           <select class="form-select form-control" name="accommodation" aria-label="Default select example">
                              <option selected>Sélectionnez L'Hébergement</option>
                              <option value="Luxueux">Luxueux</option>
                              <option value="Charme">Charme</option>
                              <option value="Maison d'Hôtes">Maison d'Hôtes</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Votre budget par personne (vols compris) </label>
                        <div class="input-group">
                           <select class="form-select form-control" name="budget" aria-label="Default select example">
                              <option selected>Sélectionnez Le Budget</option>
                              <option value="1000€ - 1500€"> 1000€ - 1500€</option>
                              <option value="1500€ - 2000€"> 1500€ - 2000€</option>
                              <option value="2000€ - 2500€"> 2000€ - 2500€</option>
                              <option value="3000€ - 3500€"> 3000€ - 3500€</option>
                              <option value="3500€ - 4000€"> 3500€ - 4000€</option>
                              <option value="Plus de 4000€"> Plus de 4000€</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Enfants-12 ans </label>
                        <div class="input-group">
                           <select class="form-select form-control" name="children" aria-label="Default select example">
                              <option selected>Sélectionnez Les Enfants</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                           </select>
                        </div>
                     </div>
                      <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Courriel </label>
                        <div class="input-group">
                           <input type="email" class="form-control" name="email" required="required" placeholder="Courriel"/>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Date de départ </label>
                        <div class="input-group">
                           <input type="date" class="form-control" name="departure_date" required="required" />
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Date de retour</label>
                        <div class="input-group">
                           <input type="date" class="form-control" name="return_date" required="required" />
                        </div>
                     </div>
                    
                     <div class="col-sm-12 col-md-12 col-xs-12">
                        <label>Numéro de téléphone</label>
                        <div class="input-group">
                           <input type="phone" class="form-control" name="phone" required="required" placeholder="numéro de téléphone"/>
                        </div>
                     </div>
                  </div>
                  <button type="submit" class="btn-primary custom-btn-blue">
                  Choix de Votre Destination
                  </button>
               </form>
            </div>
            <br>
         </div>
      </div>
    </div>
  </div>
</div>

<!-- Destination Details End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gwtknmarcjhd/public_html/resources/views/frontend/destination-details.blade.php ENDPATH**/ ?>