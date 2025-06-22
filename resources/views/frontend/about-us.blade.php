@extends('frontend.layout.app')
@section('title','voyage sur mesure au rajasthan
 | voyage sur mesure en inde du nord
')
@section('description','agence de voyage locale en inde  C est une agence de voyage réputée avec des bureaux à Jodhpur Inde du nord , 
')
@section('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
@section('content')
@section('content')
      <div class="page-title-area ptb2-100" style="height:300px">
         <div class="container">
            <div class="page-title-content">
               <!--<h1>Qui Sommes Nous</h1>-->
               <ul>
                  <!--<li class="item"><a href="{{route('index') }}">Accueil</a></li>-->
                 <!-- <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Qui Sommes Nous</a></li>-->
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="{{asset('/uploads/banners/'.$banner->image) }}" alt="Demo Image">
         </div>
      </div>
      <section id="about" class="about-section about-style-three ptb-100">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-10 m-auto">
                 <div class="about-content">
                    <div class="row">
                       <div class="col-12">
					
                          <!--<h6>{{$about->about_head}}</h6>-->
                          <!--<div class="image">
                                     <img src="{{asset('/uploads/abouts/ab2.jpeg') }}" alt="Demo Image">
                          </div>-->
                          <p>{!!$about->about_content!!}</p>
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

<!-- Tours and Travels start -->
      <section class="tour-travel">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tour-bg">
                     <div class="tour-travel-home">
                        <h2>Tour Operator in India | Poonam Trip India</h2>
                        <h6>Beat travel agency in India with good reputation. We are also available now in Jodhpur, North India. Start your tour now with Poonamvoyageinde.</h6>
                        <p>voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde, voyage sur mesure en Inde</p>
                        <p>guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage, guide francophone agence de voyage</p>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->

<section id="about" class="about-section pt-100 pb-70">
         <div class="container">
            <div class="row align-items-center">

               <div class="col-lg-6">
                <div class="video-content mb-30">
                  <section id="team" class="team-section pt-100 pb-70">
                      <div class="container">
                         <div class="row">
                            <div class="col-lg-8 col-sm-6 col-md-6">
                              <div class="item-single mb-30" style="height:auto">
                                  <div class="image" style="height:auto">
                                     <img src="{{asset('/uploads/abouts/'. $about->image) }}" alt="Demo Image">
                                  </div>
                                  <!-- <div class="content">
                                     <div class="title">
                                        <h3>
                                           <a href="#">{{$about->name}}</a>
                                        </h3>
                                        <span>{{$about->designation}}</span>
                                     </div> -->

                                     <!-- <div class="social-link">
                                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                        <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                     </div>-->
<!-- 
                                  </div> -->
                               </div>

                            </div>



                         </div>
                      </div>
       </section>


                </div>
             </div>


             <div class="col-lg-6">
                <div class="about-content mb-30">
                   <h2>
                      {{$about->name}}
                   </h2>
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


                  <!-- <div class="about-btn">
                      <a href="#" class="btn-primary">Lire Plus</a>
                      <a href="{{route('contactus') }}" class="btn-primary">Contactez Nous</a>
                       </div>-->
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








@endsection
