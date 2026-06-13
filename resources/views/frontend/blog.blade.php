@extends('frontend.layout.app')
@section('title','blog voyage inde découvrez nos lieux populaires
')
@section('description','Obtenez des informations détaillées sur les voyages en Inde avec un guide, ses attractions touristiques telles que la faune, les stations de montagne, les plages, l aventure, les pèlerins et les circuits inde   , 
')
@section('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
@section('content')

      <div class="page-title-area ptb2-100">
         <div class="container">
            <div class="page-title-content">
               <h1>Blogs</h1>
               <ul>
                  <li class="item"><a href="{{route('index') }}">Accueil</a></li>
                  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Blogs</a></li>
               </ul>
            </div>
         </div>

         <div class="bg-image">
           

            <img src="{{asset('uploads/banners/'.$banner->image) }}" alt="Demo Image">
         </div>
      </div>



   <!--- Blog Start -->

      <section id="blog" class="blog-section pt-100 pb-70">
         <div class="container">
            <!-- <div class="section-title">
               <h2>Nos Blogs</h2>
			 </div> -->
			 <div class="row" id="blog-posts-container">
                 @include('frontend.partials.blog-cards')
                         </div>

            <div class="row mt-4">
               <div class="col-12 text-center">
                  <div id="blog-load-sentinel" class="py-4">
                     @if($blogs->hasMorePages())
                        <span>Faites défiler pour charger plus de billets...</span>
                     @else
                        <span>Vous avez atteint la fin des articles.</span>
                     @endif
                  </div>
               </div>
            </div>

            <script>
            document.addEventListener('DOMContentLoaded', function() {
               let nextPage = 2;
               let loading = false;
               let hasMore = {{ $blogs->hasMorePages() ? 'true' : 'false' }};
               const sentinel = document.getElementById('blog-load-sentinel');
               const container = document.getElementById('blog-posts-container');

               function loadMoreBlogs() {
                  if (!hasMore || loading) return;
                  loading = true;
                  sentinel.innerHTML = '<span>Chargement en cours...</span>';

                  fetch('{{ route('blog') }}?page=' + nextPage, {
                     headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                     }
                  })
                  .then(response => response.json())
                  .then(data => {
                     container.insertAdjacentHTML('beforeend', data.html);
                     hasMore = data.hasMore;
                     nextPage += 1;
                     loading = false;
                     sentinel.innerHTML = hasMore ? '<span>Faites défiler pour charger plus de billets...</span>' : '<span>Vous avez atteint la fin des articles.</span>';
                  })
                  .catch(error => {
                     console.error(error);
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
                     loadMoreBlogs();
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
                        <h2>India travel blog discover our popular places</h2>
                        <h6>Get detailed information about India travel with a guide, tourist attractions such as wildlife, hill stations, beaches, adventure, pilgrims and India tours</h6>
                       
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section> -->
      <!-- Tours and Travels End -->
<!--- Blog End -->
@endsection
