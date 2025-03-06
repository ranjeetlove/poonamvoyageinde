   <style>
      .side-wig-form{
         margin-bottom:25px
      }
      .side-wig-form form{
         padding: 15px;
      }
      .side-wig-form .form-group {
         margin-bottom: 12px;
         position: relative;
      }
      .side-wig-form .form-control {
         height: 46px;
         font-size: 16px;
      }
.main-form .form-group .input-icon {
    position: absolute;
    top: 16px;
    left: 10px;
}
   </style>
   <div class="main-form side-wig-form">
               <form action="{{route('mail') }}" enctype="multipart/form-data" method="post">
                @csrf
                  <h3 class="sub-title">Contactez Nous</h3>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-user'></i></div>
                           <input type="text" name="Name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="Nom" />
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
                           <div class="input-icon"><i class='bx bx-mobile'></i></div>
                           <input type="text" name="mobile" class="form-control" id="mobile" required="" data-error="Please enter your mobile" placeholder="Mobile" />
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-icon"><i class='bx bx-chat'></i></div>
                           <input type="text" name="whatsapp" class="form-control" id="whatsapp" required="" data-error="Please enter your whatsapp" placeholder="Whatsapp" />
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