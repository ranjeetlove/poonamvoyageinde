
@extends('frontend.layout.app')
@section('title',($region->meta_title))
@section('description',($region->meta_description))
@section('keywords',($region->meta_keywords))
@section('content')

      <div class="page-title-area ptb2-100">
         <div class="container">
            <div class="page-title-content">
               <h1>{{ $region->heading }}</h1>
               <ul>
                  <li class="item"><a href="{{route('index') }}">ACCUEILLIR</a></li>
                  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Visite Sur mesure En Inde Du Nord Avec Guide</a></li>
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="{{asset('uploads/regions/'.$region->banner) }}" alt="Demo Image">
         </div>
      </div>



 <section id="destination" class="destination-section pt-100 pb-70 bg-light">
         <div class="container">
            <div class="section-title">
               <h2>{{ $region->title }}</h2>
               {!! $region->content !!}
            </div>

            <div class="row filtr-container">

			  <!-- List Start -->
           @foreach ($region->tour as $tr)
               <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                  <div class="item-single mb-30">
                     <div class="image" >
                        <img src="{{asset('/uploads/tour/image/'. $tr->image) }}" alt="Demo Image">
                     </div>
                     <div class="content">
                        <ul class="list">
                            <li><span class="location"><i class='bx bx-map'></i> {{$tr->region->region}} </span></li>
                            <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-primary">prix: {{$tr->price}}</button></li>
                         </ul>

                        <h3>
                           <a href="{{route('destinationdetails',['slug1'=>$tr->region->slug,'slug2'=>$tr->slug])}}"> {{$tr->title}} </a>
                        </h3>
                        <div class="review">
                           <i class='bx bx-smile'></i>
                           <span>{{$tr->day}} </span>
                           <span>Jour</span>
                        </div>

						 <div class="review">
                           <i class='bx bx-smile'></i>
                           <span>{{$tr->night}}</span>
                           <span>Nuit</span>
                        </div>
                        <p>
                           @php
										$check=strip_tags($tr->content) ;
									@endphp
                                        <p> {{\Illuminate\Support\Str::limit($check, 50)}}</p>
                        </p>
                        <hr>
                        <ul class="list">
                           <li><button onclick="location.href = '{{route('destinationdetails',['slug1'=>$tr->region->slug,'slug2'=>$tr->slug])}}';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>
                           <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                        </ul>
                     </div>
                     <div class="spacer"></div>
                  </div>
               </div>
           @endforeach

			  <!-- List End -->


			  {{-- <!-- List Start -->
               <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                  <div class="item-single mb-30">
                     <div class="image">
                        <img src="{{asset('frontend/assets/img/desti-details/north-india2.jpg') }}" alt="Demo Image">
                     </div>
                     <div class="content">
                        <span class="location"><i class='bx bx-map'></i> Inde du Nord </span>
                        <h3>
                           <a href="#"> Spiritual Journey To Himachal  </a>
                        </h3>
                        <div class="review">
                           <i class='bx bx-smile'></i>
                           <span>5 </span>
                           <span>Jour</span>
                        </div>

						 <div class="review">
                           <i class='bx bx-smile'></i>
                           <span>5 </span>
                           <span>Nuit</span>
                        </div>
                        <p>
                     Voyage En Inde Du Nord, Voyage Spirituel Vers L'Himachal (Haut Lieu Du Bouddhisme) Et Amritsar (Temple D'Or Du Sikhisme)
                        </p>
                        <hr>
                        <ul class="list">
                           <li><button onclick="location.href = '#';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>
                           <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                        </ul>
                     </div>
                     <div class="spacer"></div>
                  </div>
               </div>
			  <!-- List End -->


			  	  <!-- List Start -->
               <div class="col-lg-4 col-md-6 filtr-item" data-category="1" data-sort="value">
                  <div class="item-single mb-30">
                     <div class="image">
                        <img src="{{asset('frontend/assets/img/desti-details/north-india3.jpg') }}" alt="Demo Image">
                     </div>
                     <div class="content">
                        <span class="location"><i class='bx bx-map'></i> Inde du Nord </span>
                        <h3>
                           <a href="#"> Golden Temple Amritsar Tour  </a>
                        </h3>
                        <div class="review">
                           <i class='bx bx-smile'></i>
                           <span>5 </span>
                           <span>Jour</span>
                        </div>

						 <div class="review">
                           <i class='bx bx-smile'></i>
                           <span>5 </span>
                           <span>Nuit</span>
                        </div>
                        <p>
                         Le Cœur Du Rajasthan Et Le Temple D'Or D'Amritsar
                        </p>
                        <hr>
                        <ul class="list">
                           <li><button onclick="location.href = '#';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>
                           <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                        </ul>
                     </div>
                     <div class="spacer"></div>
                  </div>
               </div>
			  <!-- List End --> --}}


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
@endsection
