
      <footer class="footer-area">
        <div class="container">
           <div class="footer-top pt-100 pb-70">
              <div class="row">
                 <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                       <div class="navbar-brand">
                          <a href="{{route('index') }}">
                          <img src="{{asset('frontend/assets/img/logo/mlogo.jpg') }}" alt="Logo" />
                          </a>
                       </div>
                       <p>Poonam Voyage India "-est une agence locale basée en Inde(New Delhi)spécialisée dans les voyages sur mesure au Rajasthan avec Chauffeur Privé et Guide. Notre agence de voyage propose également des prolongations de séjour à Agra (Taj Mahal) et Varanasi (Bénarès).</p>

                    </div>
                 </div>
                <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                       <h5>Liens Rapides</h5>
                       <ul class="footer-links">
                          <li>
                             <a href="{{route('index') }}">Accueil </a>
                          </li>

                           <li>
                             <a href="{{route('aboutus') }}">Qui Sommes Nous </a>
                          </li>

                           <li>
                             <a href="{{route('tailormadetrip') }}">Voyage Sur Mesure En Inde </a>
                          </li>

                          <li>
                             <a href="{{route('comments') }}">Commentaires </a>
                          </li>

                           <li>
                             <a href="{{route('blog') }}">Blogs </a>
                          </li>

                          <li>
                             <a href="{{route('contactus') }}">Contactez Nous </a>
                          </li>

                          <li>
                             <a href="{{route('privacyPolicy') }}">Confidentialité</a>
                          </li>

                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-2 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                       <h5>Liens Rapides</h5>
                       <ul class="footer-links">
                        @php
                            $regions= App\Models\Region::where('status','Active')->orderBy('region')->get();
                        @endphp
                        @foreach ($regions as $rg)
                        <li>
                           <a href="{{route('destinationlist',$rg->slug)}}">{{$rg->region}}</a>
                        </li>
                        @endforeach
                          
                          <li>
                             <a href="{{route('termsandconditions') }}">Termes et Conditions</a>
                          </li>

                       </ul>
                    </div>
                 </div>


                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="footer-widget">
                     <h5>coordonnées</h5>


                       <div class="contact-info">
                          <div class="content">
                             <a href="tel:+91 9818153249">
                             <i class='bx bx-phone'>
                             </i>
                            +91 9818153249
                             </a>
                          </div>

                          <div class="content">
                             <a href="mailto:poonamvoyageinde@gmail.com"> <i class='bx bx-envelope'></i>
                             <span class="__cf_email__">
                            poonamvoyageinde@gmail.com
                             </span>
                             </a>
                          </div>

                          <div class="content">
                             <a href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                             <span class="__cf_email__">
                           4,Rathore-Bhawan Prithipura Rasala Road Jodhpur-342001 Rajasthan
                             </span>
                             </a>
                          </div>

                             <ul class="social-linkss  clearfix">

                                                    <a href="https://www.facebook.com/profile.php?id=100086158731809" target="_blank">
                                                    <img src="https://convertkit.com/images/social-icons/facebook.png" alt="Facebook"  style="text-decoration: none; width: 30px;"></a>

                                                   <a href="https://twitter.com/poonamvoyage" target="_blank">
                                                   <img src="https://convertkit.com/images/social-icons/twitter.png" alt="Twitter"  style="text-decoration: none; width: 30px;"></a>


                                                   <a href="https://www.youtube.com/channel/UCy77dsmJ9dLPeCIQB5eVAdg" target="_blank">
                                                   <img src="https://convertkit.com/images/social-icons/youtube_alt.png" alt="YouTube"  style="text-decoration: none; width: 30px;"></a>

                                                   <a href="https://www.linkedin.com/in/khusipal-singh-ba3405252/" target="_blank">
                                                   <img src="https://convertkit.com/images/social-icons/linkedin.png" alt="linkedin"  style="text-decoration: none; width: 30px;">
                                                   </a>

                                                   <a href="https://in.pinterest.com/poonamvoyageinde90/" target="_blank">
                                                   <img src="https://convertkit.com/images/social-icons/pinterest.png" alt="linkedin"  style="text-decoration: none; width: 30px;">
                                                   </a>
								                  <a href="https://www.instagram.com/poonamvoyageinde90/" target="_blank">
                                                  <img src="https://convertkit.com/images/social-icons/instagram.png" alt="Instagram" style="text-decoration: none; width: 30px;">
								                  </a>

                                               </ul>


                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <hr>
           <div class="copy-right-area">
              <div class="container">
                 <div class="copy-right-content">
                    <p>
                       Copyright @ <script>document.write(new Date().getFullYear())</script> Poonam Voyage Inde. 
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </footer>

       <!--- Footer End -->

