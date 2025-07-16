@extends('frontend.layout.app')
@section('content')
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
         <h1>{{$tour->title}}</h1>
         <ul>
            <li class="item"><a href="{{route('index') }}">ACCUEILLIR</a></li>
            <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>{{$tour->title}}</a></li>
         </ul>
      </div>
   </div>
   <div class="bg-image">
      <img src="{{asset('uploads/tour/banner/'.$tour->banner) }}" alt="Demo Image">
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
                        <img src="{{asset('uploads/tour/image/'.$tour->image) }}" alt="Demo Image" />
                     </div>
                  </div>
                  <div class="col-lg-6 details-package-title">
                     <h2>Destination</h2>
                     @php
                     $previewLength = 400;
                     $fullContent = strip_tags($tour->content);
                     $preview = Str::limit($fullContent, $previewLength);
                     $remaining = Str::substr($fullContent, $previewLength);
                     @endphp
                     <p class="read-more-text">
                        {!! $preview !!}
                        @if(strlen($remaining) > 0)
                        <span class="more-text" style="display: none;">{!! $remaining !!}</span>
                        <a href="javascript:void(0);" class="read-more-toggle">Lire plus...</a>
                        @endif
                     </p>
                     <h3 class="price-details-page">Price: <span>€ {{$tour->price}}</span><span> / person</span></h3>
                     <h4>Nombre total de jours et de nuits: {{$tour->day}} Jours / {{$tour->night}} Nuits</h4>
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
                  <h2 class="mb-4 text-center">🌟 Highlights of the Tour</h2>
                  <div class="row g-4">
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-building highlight-icon"></i>
                           <div class="highlight-title">Visit Jodhpur, the blue city, and the majestic Mehrangarh Fort</div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-sunset highlight-icon"></i>
                           <div class="highlight-title">Thar Desert Excursion and Camel Ride to Dechu Village (Menwar)</div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-house-door highlight-icon"></i>
                           <div class="highlight-title">Exploring Amber Fort, near Jaipur, by elephant or jeep</div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-bag-heart highlight-icon"></i>
                           <div class="highlight-title">Stroll through colorful bazaars and discover the royal palaces of Jaipur</div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-gem highlight-icon"></i>
                           <div class="highlight-title">Immersion in the golden city of Jaisalmer with its fortifications and alleys</div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="highlight-card text-center">
                           <i class="bi bi-heart highlight-icon"></i>
                           <div class="highlight-title">Visit the Taj Mahal in Agra, a timeless emblem of India</div>
                        </div>
                     </div>
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
            @foreach($dayCharts as $index => $day)
            <div class="tour-details__plan-single">
               <div class="tour-details__plan-count">
                  {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
               </div>
               <div class="tour-details__plan-content">
                  <div class="irritation-content">
                     <h3>Jour {{ $index + 1 }} : {{ $day->day_head }}</h3>
                     @php
                     $previewLength = 500;
                     $fullText = strip_tags($day->day_content);
                     $preview = Str::limit($fullText, $previewLength);
                     $remaining = Str::substr($fullText, $previewLength);
                     @endphp
                     <p class="read-more-text">
                        {!! $preview !!}
                        @if(strlen($remaining) > 0)
                        <span class="more-text" style="display: none;">{!! $remaining !!}</span>
                        <a href="javascript:void(0);" class="read-more-toggle">Lire plus...</a>
                        @endif
                     </p>
                  </div>
                  <div class="irritation-img">
                     <img src="{{ asset('uploads/tour/image/' . $day->day_img) }}" alt="Jour {{ $index + 1 }} Image" />
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <div class="container mt-5">
      <div class="row">
         <div class="col-lg-6 col-xs-12 mb-5">
            <h5 class="mb-4">❌ Le prix ne comprend pas :</h5>
            <ul class="info-pack">
               <li>Les déjeuners (repas de midi)</li>
               <li>Les vols internationaux</li>
               <li>Les pourboires, achats personnels et dépenses à caractère individuel</li>
               <li>Les frais de visa pour l’Inde et l’assurance voyage (vivement recommandée)</li>
               <li>Les droits d’entrée dans les monuments et sites touristiques</li>
            </ul>
         </div>
         <div class="col-lg-6 col-xs-12">
            <h5 class="mb-4">🟢 Le prix comprend :</h5>
            <ul class="info-pack">
               <li>Hébergement : 7 nuits en hôtels de catégorie standard ou charme, en formule demi-pension (petit-déjeuner et dîner inclus)</li>
               <li>Transport privé : véhicule climatisé avec chauffeur professionnel pour tous les transferts et trajets selon l’itinéraire</li>
               <li>Guide local francophone pendant tout le circuit</li>
               <li>Deux safaris à la découverte des tigres, matin et soir, en camion partagé</li>
            </ul>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mb-5">
         <h2>🏨 Hôtels</h2>
         <!-- Carousel HTML -->
         <div class="owl-carousel hotalsSlider">
            @foreach($hotels as $hotel)
            <div class="hotel-item">
               <img src="{{asset('uploads/hotals/'.$hotel['image']) }}" alt="{{ $hotel['name'] }}">
               <div class="hotel-name">{{ $hotel['name'] }} ({{ $hotel['city'] }})</div>
            </div>
            @endforeach
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
               <form class="pakage-details-page-form" action="{{route('mail1') }}"  enctype="multipart/form-data" method="post" style="width:100%">
                  @csrf
                  <div class="row">
                     <div class="col-sm-6 col-md-6 col-xs-12">
                        <label>Région </label>
                        <div class="input-group">
                           <select class="form-select form-control" name="region" aria-label="Default select example">
                              <option selected>Sélectionner des Régions</option>
                              @foreach ($regions as $region)
                              <option value="{{$region->region}}">{{$region->region}}</option>
                              @endforeach
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
@endsection