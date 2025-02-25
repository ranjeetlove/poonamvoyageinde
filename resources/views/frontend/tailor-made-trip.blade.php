
@extends('frontend.layout.app')
@section('title','Voyage de Luxe en Inde | Séjour Inde Pas Cher avec Poonam Voyage')
@section('description',"Explorez l'Inde avec style grâce à nos voyages de luxe ou découvrez des séjours économiques adaptés à votre budget. Poonam Voyage vous propose des expériences personnalisées et authentiques.")
@section('keywords','Voyage de luxe en Inde, Séjour Inde pas cher')
@section('content')
      <div class="page-title-area ptb2-100" style="height:300px">
         <div class="container">
            <div class="page-title-content">
               <!--<h1>Voyage Sur Mesure En Inde</h1>-->
               <ul>
                  <!--<li class="item"><a href="{{route('index') }}">Accueil</a></li>-->
                 <!-- <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>VOYAGE SUR MESURE EN INDE</a></li>-->
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="{{asset('uploads/banners/'.$banner->image) }}" alt="Demo Image">
            <div class="hero-banner-text">
            <h1>Voyage de Luxe en Inde et Séjours Pas Chers – Une Expérience Unique avec Poonam Voyage</h1>
            </div>
         </div>
      </div>



<section id="about" class="about-section pt-100 pb-70">
         <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-4">
                  <div class="video-content mb-30">
                     <div class="video-image">
                        <img src="{{asset('frontend/assets/img/about1.jpg') }}" alt="video" />
                     </div>

                  </div>
               </div>
               <div class="col-lg-8">
                                <div class="main-form ptb-100">
					<form action="{{route('mail1')}}"  enctype="multipart/form-data" method="post">
							 @csrf
					<h3 class="sub-title">Voyage Sur Mesure En Inde</h3>
                     <div class="row">
                              <div class="col-sm-12 col-md-6 col-xs-12">
								  <label>Région </label>
									 <div class="input-group">

										   <select class="form-select form-control" name="region" aria-label="Default select example">
											  <option selected>Sélectionner des Régions</option>
											   @foreach ($regions as $region)
											   <option value="{{$region->region}}">{{$region->region}}</option>
											   @endforeach
											  <!--<option value="1">Gujarat</option>
											  <option value="2">Inde Du Sud</option>
											  <option value="3">Kashmir</option>
											   <option value="4">Ladakh</option>
											  <option value="5">North India</option>
											  <option value="6">Rajasthan</option>-->
											</select>
									 </div>
                              </div>

							   <div class="col-sm-12 col-md-6 col-xs-12">
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


							    <div class="col-sm-12 col-md-6 col-xs-12">
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


							    <div class="col-sm-12 col-md-6 col-xs-12">
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

							  <div class="col-sm-12 col-md-6 col-xs-12">
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
                              <div class="col-sm-12 col-md-6 col-xs-12">
							    <label>Date de départ </label>
                                 <div class="input-group">

                                    <input type="date" class="form-control" name="departure_date" required="required" />
                                 </div>
                              </div>

							      <div class="col-sm-12 col-md-6 col-xs-12">
							    <label>Date de retour</label>
                                 <div class="input-group">

                                    <input type="date" class="form-control" name="return_date" required="required" />
                                 </div>
                              </div>
                           </div>
								<button type="submit" class="btn-primary">
                          			Choix de Votre Destination
                           		</button>
               </form>
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
      </section>


	  <hr>
<!-- Tours and Travels start -->
      <section class="tour-travel">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tour-bg">
                     <div class="tour-travel-home">
                        <h2>Tailor-made trip to India | Poonam Voyage India</h2>
                        <h6>Looking to travel to India? Ask us for a quote, we specialize in organizing family trips on a small budget</h6>
                        <p>agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan, agence locale rajasthan</p>
                        <p>agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne, agence de voyage indienne</p>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->
      <section id="about" class="about-section about-style-three ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12 m-auto">
                  <div class="about-content">
                     <div class="row">
                        <div class="col-12">
                           <h2>
                            Poonam Voyage India, Agence de voyage locale en Inde Spécialiste de la vente de voyages privés et sur mesure en Inde Circuits haut de gamme et séjours de luxe, profitez de réductions exclusives
                           </h2>

                           <h6>
                             Voyage Sur Mesure En Inde
                           </h6>

                           <p>
                            Namaste! Bonjour en Hindi!
                           </p>


						   <p> Cette jolie langue est le reflet d'un beau et grand pays l'Inde, Votre voyage sur mesure et à la carte en Inde </p>

						  <p>Un voyage ne prend pas nécessairement une forme fixe. Vous avez le droit d'être unique et de vous démarquer, à certains moments du parcours et de sortir des sentiers battus.
                           Ne serait-ce qu'une petite touche d'originalité qui se révélera être une découverte n'apparaissant sur aucun prospectus. C'est ce que Poonam Voyage est en mesure de vous offrir: une expérience “sur mesure”, rien que pour vous, à travers une Inde incroyable. </p>

                          <p>Notre équipe sur le terrain peut se mobiliser rapidement pour vous concocter un itinéraire qui vous convient parfaitement </p>


                          <p>Notre mot d'ordre est en effet que l'expérience et les connaissances des employés locaux représentent une garantie que vos aspirations seront respectées et, au final,que votre voyage sera une véritable réussite. C'est ainsi que notre réputation s'est construite. </p>

                          <p>
						 Qui d'autre pourrait vous emmener dans les restaurants qui vous conviennent, les petits bars cachés, en esquivant toutes les sorties cartographiées, si tel est votre souhait? Ils connaissent chaque recoin de leur région et sont prêts à la partager avec vous,selon vos envies et ils sont une source inépuisable de connaissances et d'originalité.
						  </p>

                          <p>Nos voyages "sur mesure" s'adressent à des groupes de toutes tailles: individuels,couples, familles, équipes sportives, groupes d'amis ou de collègues, nous adaptons simplement nos moyens à vos besoins.</p>

						  <p>Hébergement luxueux ou plus modeste et typique, transports publics ou privés, restauration intime ou les meilleurs stands de rue, le choix vous appartient.Notre agence de voyage locale compte les meilleurs du secteur parmi ses troupes.</p>


                        </div>
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

@endsection
