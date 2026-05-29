@extends('frontend.layout.app')
@section('content')
		  <div class="page-title-area ptb2-100">
			 <div class="container">
				<div class="page-title-content">
				   <h1>Termes Et Conditions</h1>
				   <ul>
					  <li class="item"><a href="{{route('index') }}">ACCUEIL</a></li>
					  <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Termes Et Conditions</a></li>
				   </ul>
				</div>
			 </div>

			 <div class="bg-image">
				<img src="{{asset('uploads/banners/'.$banner->image) }}" alt="Demo Image">
			 </div>
		  </div>








	  <hr>
      <section id="about" class="about-section about-style-three ptb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12m-auto">
                  <div class="about-content">
                     <div class="row">
                        <div class="col-12">
                           <h2>
                             Termes Et Conditions
                           </h2>

                           <p>
                              Travel has helped us to understand the meaning of life and it has
							  helped us become better people. Each time we travel, we see the
							  world with new eyes.Travel has helped us to understand the meaning
							  of life and it has helped us become better people. Each time we
							  travel, we see the world with new eyes.Travel has helped us to
							  understand the meaning of life and it has helped us.
                           </p>
                        </div>
                     </div>


                  </div>
               </div>
            </div>
         </div>
         <div class="shape shape-1"><img src="{{asset('frontend/assets/img/shape1.png') }}" alt="Background Shape"></div>
         <div class="shape shape-2"><img src="{{asset('frontend/assets/img/shape2.png') }}" alt="Background Shape"></div>
         <div class="shape shape-3"><img src="{{asset ('frontend/assets/img/shape3.png') }}" alt="Background Shape"></div>
         <div class="shape shape-4"><img src="{{asset('frontend/assets/img/shape4.png') }}" alt="Background Shape"></div>
      </section>


      @endsection





