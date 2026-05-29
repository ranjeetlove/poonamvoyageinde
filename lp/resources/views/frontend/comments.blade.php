@extends('frontend.layout.app')
@section('title','Avis agence | Poonam Voyage Inde
')
@section('description','les avis des clients khusipal singh guide , agence de voyage spécialiste du  voyage sur mesure  , 
')
@section('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
@section('content')
      <div class="page-title-area ptb2-100" style="height:300px">
         <div class="container">
            <div class="page-title-content">
               <!--<h1>Commentaires</h1>-->
               <ul>
                 <!-- <li class="item"><a href="{{route('index') }}">Accueil</a></li>-->
                 <!-- <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Commentaires</a></li>-->
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="{{asset('uploads/banners/'.$banner->image) }}" alt="Demo Image">
         </div>
      </div>




    <section id="team" class="team-section pt-100 pb-70">
         <div class="container">
               <div class="section-title">
                  <h2>Rétroaction</h2>
              </div>
            <div class="row">
               @foreach ($testimonials as $testimonial)
                  <div class="col-lg-3 col-md-6">
                     <div class="item-single mb-30">
                        <div class="image">
                           <img src="{{asset('uploads/testimonials/'.$testimonial->image) }}" alt="Demo Image" >
                        </div>
                        <div class="content">
                           <div class="title">
                              <h3>
                                 <a href="{{route('commentsdetails',$testimonial->slug)}}">{{$testimonial->comment_head}}</a>
                              </h3>
                              <span>{!!Str::limit($testimonial->comment_content, 60)  !!}</span>
                        <button onclick="location.href = '{{route('commentsdetails',$testimonial->slug)}}';" type="button" class="btn btn-sm btn-danger">Lire Plus</button>
                           </div>

                        </div>
                     </div>
                  </div>
               @endforeach
               

			  
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



@endsection
