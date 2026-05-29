

@extends('frontend.layout.app')
@section('title','Agence de voyage en Inde du nord | circuits et voyages en inde | Agence de Guide Touristique En Inde
')
@section('description','Tour opérateur spécialiste des circuits au Rajasthan & gujarat, Inde du sud .Le guide Francophone pour organiser votre voyage facilement et rapidement, circuit en petits groupes et organise des excursions d une journée et des voyages personnalisés en Inde , 
')
@section('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
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




	  
@endsection



