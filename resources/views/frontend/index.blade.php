

@extends('frontend.layout.app')
@section('title','Meilleur tour opérateur et agence de voyages en Inde | Réservez des forfaits touristiques maintenant!
')
@section('description','Vous recherchez une agence de voyage ou un tour opérateur en Inde ? Poonam Voyage Inde propose les meilleurs forfaits touristiques, des guides experts et des expériences de voyage inoubliables. Réservez maintenant! , 
')
@section('keywords','Meilleure agence de voyage en Inde, Meilleur tour opérateur en Inde, Les meilleurs forfaits touristiques en Inde, Forfaits de voyage en Inde, Poonam Voyage Inde, Guides experts en Inde, Réservez dès maintenant vos circuits en Inde')
@section('content')
    <!-- Banners Start -->
				 <div id="home" class="home-banner-area home-style-three">
					 <div class="container-fluid p-0">
						<div class="banner-slider-three owl-carousel">
                     @foreach ($banners as $banner)
                        <div class="slider-item item-one">
                        <img src="{{asset('/uploads/banners/'.$banner->image) }}" class="logo1" alt="Logo">
                        </div>
                     @endforeach
						</div>
					 </div>
				  </div>
	   <!-- Banners End -->



	  <!-- Info Start -->

      <section class="features-section pt-100 pb-70 bg-light">
         <div class="container">
            <!--<div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="item-single mb-30">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                     <h3><a href="#">Meilleur Service de Guide Touristique</a></h3>
                     <p>
					 Par rapport aux périodes antérieures où une réservation
                     le personnel doit mettre à jour son inventaire à chaque fois.
					 </p>

                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="item-single mb-30">
                   <i class="fa fa-book" aria-hidden="true"></i>
                     <h3><a href="#">Connaissance approfondie de l'histoire indienne</a></h3>
                     <p>
					Vous pouvez rêver, créer, concevoir et construire le plus
                    endroit merveilleux dans le monde. Mais nous avons besoin de gens.
					 </p>

                  </div>
               </div>
               <div class="col-lg-4 col-md-6 m-auto">
                  <div class="item-single mb-30">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                     <h3><a href="#"> licence du gouvernement de l'Inde</a></h3>
                     <p> Par rapport aux périodes antérieures où une réservation
                         le personnel doit mettre à jour son inventaire à chaque fois.
					 </p>

                  </div>
               </div>
            </div>-->
         </div>
      </section>

	  <!-- Info End -->



	  <!-- About us Start -->

	  <!-- <section id="about" class="about-section pt-100 pb-70">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="video-content mb-30">
                  <section id="team" class="team-section pt-100 pb-70">
					 <div class="container">

						<div class="row">
						   <div class="col-lg-8 col-sm-6 col-md-6">
							  <div class="item-single mb-30">
								 <div class="image">
									<img src="{{asset('/uploads/abouts/'. $about->image) }}" alt="Demo Image">
								 </div>
								 <div class="content">
									<div class="title">
									   <h3>
										  <a href="#">{{$about->name}}</a>
									   </h3>
									   <span>{{$about->designation}}</span>
									</div>
									<div class="social-link">
									   <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
									   <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
									   <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
									   <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
									</div>
								 </div>
							  </div>
						   </div>



						</div>
					 </div>
      </section>

                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-content mb-30">
                     <h2>{{$about->name}}</h2>
                     <p>{{$about->about_owner}}</p>
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="content-list">
                              <i class='bx bx-check-shield'></i>
                              <h6>Système de Déplacement De Sécurité</h6>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="content-list">
                              <i class='bx bx-donate-heart'></i>
                              <h6>Visite Économique</h6>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="content-list">
                              <i class='bx bx-time'></i>
                              <h6>Planification de Voyage Experte</h6>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="content-list">
                              <i class='bx bx-station'></i>
                              <h6>Communication Rapide</h6>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="content-list">
                              <i class='bx bx-like'></i>
                              <h6>Bonne Solution et Guide</h6>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="content-list">
                              <i class='bx bx-support'></i>
                              <h6>Support Client 24/7</h6>
                           </div>
                        </div>
                     </div>
                     <div class="about-btn">
                        <a href="{{route('aboutus') }}" class="btn-primary">Lire Plus</a>
                        <a href="{{route('contactus') }}" class="btn-primary">Contactez Nous</a>




                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-1">
            <img src="{{asset('frontend/assets/img/shape1.png') }}" alt="Background Shape">
         </div>
         <div class="shape shape-2">
            <img src="{{asset('frontend/assets/img/shape2.png') }}" alt="Background Shape">
         </div>
      </section>-->

	  <!--- About us End -->



	<!--- Destination Start -->
	 <section id="tours" class="tours-section pt-100 pb-70 bg-light">
         <div class="container">
            <div class="section-title">
               <h2>Nos Destinations Pour Vos Voyages Sur Mesure En Inde</h2>
               <!-- <p>
			   Travel has helped us to understand the meaning of life and it
			   has helped us become better people. Each time we travel,
			   we see the world with new eyes.
			   </p> -->
            </div>
            <div class="row no-wrap">
               <div class="col-auto col-lg-4">
                  <div class="item-single mb-30">
                     <div class="image">
                        <img src="{{asset('frontend/assets/img/destination/d2.jpg') }}" alt="Demo Image" />
                     </div>
                     <div class="content">
                        <span class="location"><i class='bx bx-map'></i>Inde</span>
                        <marquee>
						 <h3>
                           <a href="#">Destinations populaires en Inde</a>
                        </h3>
						 </marquee>
                        <div class="review mb-15">
                           <i class='bx bxs-star'></i>
                           <i class='bx bxs-star'></i>
                           <i class='bx bxs-star'></i>
                           <i class='bx bxs-star'></i>
                           <i class='bx bxs-star'></i>
                        <!--   <span>25 Review</span> -->
                        </div>
                        <p>
                           Un magnifique petit chalet au bord de la mer- parfait pour 
						   explorer avec le petit bateau qui est inclus dans le prix. 
						   Situé en face de Nidri sleeping.
                        </p>
                        <hr>
                        <ul class="list">
                           <li><button onclick="location.href = '{{route('aboutus')}}';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>

                           <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col col-md-8">
                  <div class="tours-slider owl-carousel mb-30">

				   <!-- List Start --->
               @foreach ($regions as $region)
                   <div class="slider-item">
                        <div class="image">
                           <img src="{{asset('/uploads/regions/'. $region->image) }}" alt="Demo Image" />
                        </div>
                        <div class="content">
                           <div class="review">
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <!-- <span>39 Review</span> -->
                           </div>
                           <div class="title">
                              <h3>
                                 <a href="#">{{$region->region}}</a>
                              </h3>
                           </div>
                          <ul class="list">
                           <li><button onclick="location.href = '{{route('destinationlist',$region->slug) }}';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>

                           <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                        </ul>
                        </div>
                     </div>
               @endforeach                     
					<!-- List End --->
                  </div>
               </div>
            </div>
         </div>
      </section>



	<!--- Destination End -->


	      	<!--- Info Start -->
		 <section id="about" class="about-section about-style-three ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-10 m-auto">
                  <div class="about-content">
                     <div class="row">
                        <div class="col-12">
                           <h1>
                            Tour Opérateur en Inde | Voyages sur mesure en Inde
                           </h1>
                           <p>
                         Poonam Voyage est une agence de voyage spécialisée dans l'organisation de voyages sur mesure en Inde, avec une expertise particulière dans les circuits au Rajasthan. En tant que <b>Tour Opérateur en Inde</b>, nous nous engageons à offrir des expériences uniques et mémorables à nos clients, en explorant les trésors culturels, historiques et naturels de cette région fascinante. </p>

<p>Nos circuits sur mesure au Rajasthan sont conçus pour capturer l'essence même de cette terre empreinte d'histoire et de splendeur. Que ce soit une visite des palais majestueux de Jaipur, une balade à dos de chameau dans les dunes dorées du désert de Thar, ou une découverte des marchés animés de Jodhpur, chaque itinéraire est soigneusement élaboré pour satisfaire les attentes les plus exigeantes des voyageurs.</p>

							<p>En tant qu'<a href="https://www.poonamvoyageinde.com/voyage-sur-mesure-en-inde"><b>Agence de Guide Touristique en Inde</b></a>, notre équipe dévouée de professionnels locaux vous accompagnera tout au long de votre voyage, partageant des informations culturelles, des anecdotes historiques et des conseils pratiques pour rendre votre expérience authentique et enrichissante.</p>

<p>Chez Poonam Voyage, nous mettons l'accent sur la personnalisation, permettant à nos clients de choisir et de combiner des activités selon leurs préférences. Que vous soyez intéressé par l'architecture, la cuisine locale, les festivals colorés ou la vie rurale, nous créons des voyages qui correspondent à vos passions.</p>

<p>Optez pour Poonam Voyage pour vivre une aventure exceptionnelle au cœur de l'Inde, en explorant le Rajasthan avec une agence qui comprend véritablement les besoins et les aspirations des voyageurs avides de découvertes uniques et authentiques.</p>
                          

                        </div>
                     </div>


					 <div class="row">
                        <div class="col-lg-6">
                              <img src="{{asset('frontend/assets/img/about/ab4.jpg') }}" width="50%" alt="Demo Image" />

                        </div>

						 <div class="col-lg-6">
                              <img src="{{asset('frontend/assets/img/about/ab5.jpg') }}" width="60%" alt="Demo Image" />

                        </div>
                     </div>




                     <div class="about-btn">
                        <a href="{{route('contactus') }}" class="btn-primary">Contactez Nous</a>
                        <a href="{{route('aboutus') }}" class="btn-primary">Lire Plus</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-1"><img src="{{asset('frontend/assets/img/shape1.png') }}" alt="Background Shape"></div>
         <div class="shape shape-2"><img src="{{asset('frontend/assets/img/shape2.png') }}" alt="Background Shape"></div>
         <div class="shape shape-3"><img src="{{asset('frontend/assets/img/shape3.png') }}" alt="Background Shape"></div>
         <div class="shape shape-4"><img src="{{asset('frontend/assets/img/shape4.png') }}" alt="Background Shape"></div>
      </section>
			<!--- Info End -->

	  	<!--- Destination Start -->


      <section id="destination" class="destination-section pt-100 pb-70 bg-light">
         <div class="container">
            <div class="section-title">
               <h2>Destinations Populaires Proposées</h2>
               <p>
			   Les voyages nous ont aidés à comprendre le sens de la vie et nous ont aidés à devenir de meilleures personnes. Chaque fois que nous voyageons, nous voyons le monde avec de nouveaux yeux.
			   </p>
            </div>
            <div class="row">
               <div class="col-md-8 m-auto">
                  <div class="filter-group">
                     <ul id="control" class="list-control">
                        <li class="active" data-filter="all">All</li>
                        @foreach ($regions as $key=>$region)
                        <?php if($region->id==3){ continue; }?>
                        <li data-filter="{{$key+1}}">{{$region->region}}</li>                            
                        @endforeach 
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row filtr-container">
			
               <!-- List Start --> 
               @foreach ($regions as $key=>$region)
               {{-- {{dd($region)}} --}}

               @php
                $tours=App\Models\Tour::where('region_id',$region->id)->get();    
               @endphp
                   @foreach ($tours as $tour)
                   <?php if($region->id==3){ continue; }?>
                   <div class="col-lg-4 col-md-6 filtr-item" data-category="{{$key+1}}" data-sort="value">
                     <div class="item-single mb-30">
                        <div class="image">
                           <img src="{{asset('uploads/tour/image/'.$tour->image) }}" alt="Demo Image">
                        </div>
                        <div class="content">
                           <span class="location"><i class='bx bx-map'></i> {{$tour->region->region}} </span>
                           <h3>
                              <a href="{{route('destinationdetails',['slug1'=>$tour->region->slug,'slug2'=>$tour->slug])}}"> {{$tour->title}}  </a>
                           </h3>
                           <div class="review">
                              <i class='bx bx-smile'></i>
                              <span>{{$tour->day}}</span>
                              <span>Jour</span>
                           </div>

                     <div class="review">
                              <i class='bx bx-smile'></i>
                              <span>{{$tour->night}}</span>
                              <span>Nuit</span>
                           </div>
                           @php
										$check=strip_tags($tour->content) ;
									@endphp
                                        <p> {{\Illuminate\Support\Str::limit($check, 50)}}</p>
                           <p>
                           {{-- Inexpensive North India And The Land Of The Maharajahs Rajasthan --}}
                           </p>
                           <hr>
                           <ul class="list">
                              <li><button onclick="location.href = '{{route('destinationdetails',['slug1'=>$tour->region->slug,'slug2'=>$tour->slug])}}';" type="button" class="btn btn-sm btn-danger">Lire Plus</button></li>
                              <li><button onclick="location.href = '{{route('contactus') }}';" type="button" class="btn btn-sm btn-success">Contactez Nous</button></li>
                           </ul>
                        </div>
                        <div class="spacer"></div>
                     </div>
                  </div>
               <!-- List End --> 
               @endforeach
               @endforeach               
               <!-- List Start -->                  
                </div>            
         </div>
      </section>


	  <!-- Destination End -->

	 <!-- Tours and Travels start -->
      <section class="tour-travel">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tour-bg">
                     <div class="tour-travel-home">
                        <h2>Meilleurs circuits et voyages en Inde. Explorez d'étonnants forfaits touristiques en Inde</h2>
                        <h6>Poonamvoyageinde est le bon choix pour le tourisme en Inde. Spécialisé pour les tournées au Rajasthan, au Gujarat, au Cachemire et en Inde du Nord. Nous mettons à votre disposition un guide de voyage en français pour améliorer votre voyage.</h6>
                        <p>tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde, tour opérateur en Inde,</p>
                        <p>circuit au rajasthan en Inde, circuit au rajasthan en Inde, ,circuit au rajasthan en Inde circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde, circuit au rajasthan en Inde</p>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->
<style>
	.slider-item.testimonials{
		    display: flex;
    width: 100%;
    padding: 0px !important;
	}
	.testimonial-section .testimonial-slider .slider-item .client-img {
    /* position: absolute; */
    /* top: 10px; */
    /* left: 10px; */
    width: 25%;
    padding-left: 0px;
    position: relative;
    top: 0px;
    left: 0px
}
.slider-item.testimonials .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    height: auto;
    width: 100%;
    height: 100%;
}
.testimonial-section .testimonial-slider .slider-item .content {
    /* max-width: 476px; */
    margin-left: auto;
    margin-right: auto;
    padding-left: 100px;
    width: 75%;
    margin: auto;
    max-width: 100%;
    padding-right: 20px;
}
.testimonial-section .testimonial-slider .slider-item .content .review {
     margin-top: 0px;
    float: right;
}
.testimonial-section .testimonial-slider::before, .testimonial-section .testimonial-slider::after {
    
     -webkit-box-shadow: none !important; 
     box-shadow: none !important; 
   
}
</style>
    <!--- Feedback Start -->
      <section id="testimonial" class="testimonial-section ptb-100">
         <div class="container">
            <div class="section-title">
               <h2>Que Disent Nos Clients</h2>
             <!--  <p>Travel has helped us to understand the meaning of
			   life and it has helped us become better people.
			   Each time we travel, we see the world with new eyes.</p> -->
            </div>
            <div class="row">
               <div class="col-lg-8 m-auto">
                  <div class="testimonial-slider owl-carousel">
                    @foreach ($test as $item)
				  <!-- List Start -->
                     <div class="slider-item testimonials">
                        <div class="client-img">
                            <img src="{{asset('uploads/testimonials/'.$item->image)}}" width="300px" alt=""></a>
                        </div>
                        <div class="content">
                           <div class="client-info">
                              <h3>{{ $item->name }}</h3>
                              <span>{{ $item->country }}</span>

                           </div>
                          <!-- <div class="quote">
                              <i class='bx bxs-quote-left'></i>
                           </div>-->
                           <p>{!!(Str::limit($item->comment_content, 300))!!}                          
                           </p>
                           <div class="review">
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                              <i class='bx bxs-star'></i>
                           </div>
                           <a href="{{route('commentsdetails', $item->slug)}}">
                              <button class="btn btn-sm btn-danger">
                                 Lire Plus
                              </button>
                           </a>
                        </div>
                     </div>
              <!-- List End -->
@endforeach
                  </div>
               </div>
            </div>
            <div class='clients-img'>
               @foreach ($test as $key=>$item)
               <img class="image image-{{$key+1}}" src="{{asset('uploads/testimonials/'.$item->image)}}" alt="Demo Image">

               @endforeach
            </div>
         </div>
         <div class="shape">
            <img src="{{asset('frontend/assets/img/shape1.png') }}" alt="Background Shape">
         </div>
      </section>

	  <!--- Feedback End -->

	  <!--- Info  Start -->
      <section id="tours" class="tours-section pt-100 pb-70 bg-light">
         <div class="container">
            <div class="section-title">
               <marquee> <h2> Poonam Voyage Inde</h2>  </marquee>
               <p>
			   Les voyages nous ont aidés à comprendre le sens de la vie et nous ont aidés à devenir de meilleures personnes. Chaque fois que nous voyageons, nous voyons le monde avec de nouveaux yeux.</p>
            </div>

         </div>
      </section>
	  <!--- Info  End -->


     <!--- Blog Start -->

      <section id="blog" class="blog-section pt-100 pb-70">
         <div class="container">
            <div class="section-title">
               <a href="https://www.poonamvoyageinde.com/blog/voyage-en-inde-pas-cher-circuit-en-inde-d%C3%A8s-590%E2%82%AC"/><h2>Voyage en Inde Pas Cher - Circuit en Inde dès 590€</h2></a>
               <a href="https://www.poonamvoyageinde.com/blog/voyage-en-inde-pas-cher-circuit-en-inde-d%C3%A8s-590%E2%82%AC"/><img src="https://www.poonamvoyageinde.com/public/frontend/assets/img/blog/homebg12.jpg"></a>
            </div>
            
            <div class="row">
                
                
                <!--@foreach ($blogs as $key=>$item)
                @if ($key==0)
                <div class="col-lg-6">
                  <div class="item-single item-big mb-30">
                     <div class="image">
                        <img src="{{asset('uploads/blog/'.$item->image)}}" width="300px" alt=""></a>

                        {{-- <img src="{{asset('frontend/assets/img/blogs/blog1.jpg') }}" alt="Demo Image" /> --}}
                     </div>
                     <div class="content">
                        <ul class="info-list">
                           <li><i class='bx bx-calendar'></i> {{ $item->posted_date }}</li>
                           <li><i class='bx bx-tag'></i> {{ $item->category }}  </li>
                        </ul>
                        <h3>
                           <a href="{{route('blogdetails',$item->slug) }}"> {{ $item->title }}</a>
                        </h3>
                        <p>

                           {!!Str::limit($item->content, 150)  !!}
                           {{-- I have personally participated in many of the
						   programs mentioned on this site. One of the programs
						   is Save Our I have personally in many of the
						   programs mentioned on this site. --}}
                        </p>
                        <ul class="list">
                           <li>
                              <div class="author">
                                 <img src="{{asset('frontend/assets/img/blog/author1.jpg') }}" alt="Demo Image">
                                 <span>by {{ $item->posted_by }} </span>
                              </div>
                           </li>
                           <li>
                              <a href="{{route('blogdetails',$item->slug) }}" class="btn-primary">Lire Plus</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
                @endif
               
               @endforeach 
               <div class="col-lg-6">
                  <div class="row">
                    @foreach ($blogs as $key=>$blog)
                     @if ($key>0)
                     <div class="col-lg-6 col-md-6">
                        <div class="item-single mb-30">
                           <div class="image">
                              <img src="{{asset('uploads/blog/'.$blog->image)}}" alt="Demo Image" />
                           </div>
                           <div class="content">
                              <ul class="info-list">
                                 <li><i class='bx bx-calendar'></i> {{ $blog->posted_date }}</li>
                                 <li><i class='bx bx-tag'></i>{{ $blog->category }} </li>
                              </ul>
                              <h3>
                                 <a href="{{route('blogdetails',$blog->slug) }}">{{ $blog->title}}</a>
                              </h3>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="{{asset('frontend/assets/img/blog/author1.jpg') }}" alt="Demo Image">
                                       <span>By - {{ $blog->posted_by }} </span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     @endif
                     @endforeach
                  </div>
               </div>-->
            </div>
			 
         </div>
      </section>


	  <!--- Blog End -->


	  	  <!-- Video Start -->

     <!-- <section class="features-section pt-100 pb-70 bg-light">
         <div class="container">

		    <div class="section-title">
               <h2>Notre Galerie Vidéo</h2>

            </div>

            <div class="row">
               @foreach ($videos as $video)
                  <div class="col-lg-4 col-md-6">
                     <iframe width="560" height="315" src="{{$video->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
               @endforeach
               
            </div>
         </div>
      </section>-->

	  <!-- Video End -->
@endsection



