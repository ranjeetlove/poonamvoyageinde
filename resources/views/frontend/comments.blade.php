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
            <div class="row" id="testimonials-container">
               @include('frontend.partials.testimonial-cards')
            </div>

            <div class="row mt-4">
               <div class="col-12 text-center">
                  <div id="testimonial-load-sentinel" class="py-4">
                     @if($testimonials->hasMorePages())
                        <span>Faites défiler pour charger plus de témoignages...</span>
                     @else
                        <span>Vous avez atteint la fin des témoignages.</span>
                     @endif
                  </div>
               </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function(){
               let nextPage = 2;
               let loading = false;
               let hasMore = {{ $testimonials->hasMorePages() ? 'true' : 'false' }};
               const sentinel = document.getElementById('testimonial-load-sentinel');
               const container = document.getElementById('testimonials-container');

               function loadMoreTestimonials() {
                  if (!hasMore || loading) return;
                  loading = true;
                  sentinel.innerHTML = '<span>Chargement en cours...</span>';

                  fetch('{{ route('comments') }}?page=' + nextPage, {headers:{'X-Requested-With':'XMLHttpRequest'}})
                    .then(res => res.json())
                    .then(data => {
                       container.insertAdjacentHTML('beforeend', data.html);
                       hasMore = data.hasMore;
                       nextPage += 1;
                       loading = false;
                       sentinel.innerHTML = hasMore ? '<span>Faites défiler pour charger plus de témoignages...</span>' : '<span>Vous avez atteint la fin des témoignages.</span>';
                    }).catch(err=>{
                       console.error(err);
                       loading = false;
                       sentinel.innerHTML = '<span>Erreur de chargement. Essayez de défiler à nouveau.</span>';
                    });
               }

               function onScroll() {
                  if (!hasMore || loading) return;
                  const threshold = 600;
                  const scrollPosition = window.innerHeight + window.scrollY;
                  const bottomPosition = document.documentElement.scrollHeight - threshold;
                  if (scrollPosition >= bottomPosition) {
                     loadMoreTestimonials();
                  }
               }

               window.addEventListener('scroll', onScroll);
            });
            </script>
      </section>

<!-- Tours and Travels start -->
      <!-- <section class="tour-travel">
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
      </section> -->
      <!-- Tours and Travels End -->



@endsection
