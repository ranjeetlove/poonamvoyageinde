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
			 <div class="row">
                 @foreach ($blogs as $key => $blog)
                 <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                      <div class="item-single mb-30">
                           <div class="image">
                            <img src="{{asset('uploads/blog/'.$blog->image)}}" alt="">
                           </div>
                           <div class="content">
                              <ul class="info-list">
                                 <li><i class='bx bx-calendar'></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</li>
                                 <li><i class='bx bx-tag'></i>{{ $blog->category }}</li>
                              </ul>
                              <h3>
                              <a href="{{ route('blogdetails', $blog->slug) }}">{{ \Str::limit($blog->title, 60) }}</a>
                              </h3>
                              <p>{{ Str::limit(strip_tags($blog->content), 90) }}</p>
                              <ul class="list">
                                 <li>
                                    <div class="author">
                                       <img src="{{asset('frontend/assets/img/blog/author1.jpg') }}" alt="Demo Image">
                                       <span>By - {{ implode(' ', array_slice(explode(' ', $blog->posted_by), 0, 2)) }}</span>
                                    </div>
                                 </li>
								  <li>
									  <a href="{{route('blogdetails',$blog->slug) }}" class="btn-primary">Lire Plus</a>
								  </li>
                              </ul>
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
                        <h2>India travel blog discover our popular places</h2>
                        <h6>Get detailed information about India travel with a guide, tourist attractions such as wildlife, hill stations, beaches, adventure, pilgrims and India tours</h6>
                       
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->
<!--- Blog End -->
@endsection
