@extends('frontend.layout.app')
@section('title','contactez-nous agence de voyage locale en Inde | Poonam Voyage Inde
')
@section('description','Remplissez le formulaire pour obtenir des informations Forfaits vacances tout inclus Vous pouvez également nous appeler au 9818153249 ou visiter notre site Web à https://poonamvoyageinde.com/ pour plus de détails.   , 
')
@section('keywords','touropérateurenInde,circuitaurajasthanenInde,voyagesurmesureenInde,guidefrancophoneagencedevoyage')
@section('content')

      <div class="page-title-area ptb2-100" style="height:300px">
         <div class="container">
            <div class="page-title-content">
              <!-- <h1>Contactez Nous</h1>-->
               <ul>
                  <!--<li class="item"><a href="{{route('index') }}">Accueil</a></li>-->
                  <!--<li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Contactez Nous</a></li>-->
               </ul>
            </div>
         </div>

         <div class="bg-image">
            <img src="{{asset('uploads/banners/'.$banner->image) }}" alt="Demo Image">
         </div>
      </div>



      <div class="contact-section">



	           <div class="contact-footer bg-light">
            <div class="container-fluid p-0">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="content pt-100 pb-70 ">
                        <div class="info-content">
                           <h3 class="sub-title">Adresse</h3>
                           <div class="content-list">
                              <i class='bx bx-map'></i>
                              <h6>4th Street, Rathore-Bhawan Prithipura
							  Rasala Road Jodhpur, Rajasthan 342001 INDIA</h6>
                           </div>
                           <div class="content-list">
                              <i class='bx bx-phone'></i>
                              <h6>Phone: +91 98 18153249</h6>
                           </div>



                           <div class="content-list">
                              <i class='bx bx-at'></i>
                              <h6>Email: <a href="mailto:info@poonamvoyageinde.com" class="__cf_email__">info@poonamvoyageinde.com</a></h6>
                           </div>

						    <div class="content-list">
                              <i class='bx bx-at'></i>
                              <h6>Email: <a href="mailto:poonamvoyageinde@gmail.com" class="__cf_email__">poonamvoyageinde@gmail.com</a></h6>
                           </div>

                        </div>

                     </div>
                  </div>
                  <div class="col-lg-7">
                           <div class="main-form ptb-100">
               <form action="{{route('mail') }}" enctype="multipart/form-data" method="post">
                @csrf
                  <h3 class="sub-title">Contactez Nous</h3>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-user'></i></div>
                           <input type="text" name="Name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="Nom" />
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-at'></i></div>
                           <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="Courriel" />
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-comment-detail'></i></div>
                           <input type="text" name="subject" class="form-control" id="subject" required="" data-error="Please enter subject" placeholder="Sujet" />
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
                     </div>
                  </div>
               </form>
            </div>
                  </div>
               </div>
            </div>
         </div>
		  
		  <!-- Tours and Travels start -->
      <section class="tour-travel">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tour-bg">
                     <div class="tour-travel-home">
                        <h2>Contact us local travel agency in india | Poonam Travel India</h2>
                        <h6>Fill out the form for information All Inclusive Vacation Packages You can also call us on 9818153249 or visit our website at https://poonamvoyageinde.com/ for more details.</h6>
                        
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>
      <!-- Tours and Travels End -->
         <div class="container">
            <div class="main-form ptb-100">
               <form id="contactForm">
                  <h3 class="sub-title">Direction</h3>
                  <div class="row">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699627.197817463!2d71.6974388384756!3d25.104664537388413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418d610235b057%3A0x38c4a26167f6b251!2sPoonam%20Voyage%20Inde%20%2C%20Voyage%20sur%20mesure%20en%20inde%20%2C%20Tour%20op%C3%A9rateur%20Inde!5e0!3m2!1sen!2sin!4v1662631808095!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




                  </div>
               </form>
            </div>
         </div>





      </div>



@endsection
