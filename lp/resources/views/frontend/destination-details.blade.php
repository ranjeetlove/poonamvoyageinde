@extends('frontend.layout.app')
@section('content')
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
         <div class="container">
            <div class="section-title">
               <h2>{{$tour->title}}</h2>
            </div>
            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="destination-details-desc mb-30">
                     <div class="row align-items-center">
                        <div class="col-md-8 col-sm-12">
                           <div class="image mb-30">
                              <img src="{{asset('uploads/tour/image/'.$tour->image) }}" alt="Demo Image" />
                           </div>
                        </div>

                     </div>
                     <div class="content mb-20">
                        <h3>{{$tour->title}}</h3>
                        <p>
                           {!!$tour->content!!}
                        </p>
                     </div>

					 <div class="content mb-20">
                  @foreach ($tour->daychart as $dy)
                  <h3>{{$dy->day_head}}</h3>
                  <p>{!!$dy->day_content!!}</p>
                  @endforeach



                     </div>




                   <hr>
                     <div class="comments-area mb-30">
                        <h3 class="sub-title">Demande de Devis</h3>

                     </div>
                     <div class="comment-reply">
                         <form action="{{route('mail1') }}"  enctype="multipart/form-data" method="post">
							 @csrf
                           <h3 class="sub-title">Obtenir Un Devis</h3>
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
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <label>Courriel </label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" required="required" placeholder="Courriel"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xs-12">
                                    <label>Numéro de téléphone</label>
                                    <div class="input-group">
                                        <input type="phone" class="form-control" name="phone" required="required" placeholder="numéro de téléphone"/>
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
               <div class="col-lg-4 col-md-12">
                  <aside class="widget-area">
                            <div class="main-form ptb-100">
               <form action="{{route('mail') }}" enctype="multipart/form-data" method="post">
                @csrf
                  <h3 class="sub-title">Contactez Nous</h3>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-user'></i></div>
                           <input type="text" name="name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="Nom" />
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-at'></i></div>
                           <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="Courriel" />
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-icon textarea"><i class='bx bx-envelope'></i></div>
                           <textarea name="message" id="message" class="form-control" cols="100" rows="6" required="" data-error="Please enter your message" placeholder="Message..."></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>

                     <div class="col-lg-12">
                        <button type="submit" class="btn-primary">Soumettre</button>
                        <div id="msgSubmit" class="h5 text-center hidden"></div>
                     </div>
                  </div>
               </form>
            </div>



                  </aside>
               </div>
            </div>
         </div>
      </section>
	  <!-- Destination Details End -->




@endsection
