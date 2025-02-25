<!DOCTYPE html>
<html lang="en">

   <head>
       <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MQBDSD7Z');</script>
        <!-- End Google Tag Manager -->
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <meta name="keywords" content="{!! $pageKeywords ?? 'Meilleure agence de voyage en Inde, Meilleur tour opérateur en Inde, Les meilleurs forfaits touristiques en Inde, Forfaits de voyage en Inde, Poonam Voyage Inde,Guides experts en Inde, Réservez dès maintenant vos circuits en Inde' !!}" />
      <meta name="description" content="{!! $pageDescription ?? 'Vous recherchez une agence de voyage ou un tour opérateur en Inde ? Poonam Voyage Inde propose les meilleurs forfaits touristiques, des guides experts et des expériences de voyage inoubliables. Réservez maintenant!' !!}" />
      <title>{{ $pageTitle ?? 'Meilleur tour opérateur et agence de voyages en Inde | Réservez des forfaits touristiques maintenant!' }}</title>
      <meta name="google-site-verification" content="lpK8VQtKX9gpTy4nd5vloLnyctJBRTheNH7vggewunU" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/boxicons.min.css') }}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-datepicker.min.css') }}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css') }}" />
      <link rel="stylesheet" href="{{asset('frontend/assets/css/theme-dark.css') }}" />
      <link rel="icon" href="{{asset('frontend/assets/img/favicon.png') }}" type="image/png" />

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   
	   <link rel="alternate" href="https://poonamvoyageinde.com/" hreflang="fr-fr" />
    <link rel="alternate" href="https://poonamvoyageinde.com/" hreflang="x-default" />


<?php 
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else $link = "http";
      
    // Here append the common URL characters.
    $link .= "://";
      
    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];
      
    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
       //  echo $link;
?>
<link rel="canonical" href="<?php echo $link;?>" />	   

	   

	   <style>

		   
		 


.icon-bar {
  position: fixed;
  top:65%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
	z-index:10001;
	  right:0px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 10px;
  transition: all 0.3s ease;
  color: white;
  font-size: 15px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.instagram {
  background: #dd2a7b;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}
.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background:#0077b5;
  color: white;
}




</style>


   </head>


   <body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQBDSD7Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('frontend.layout.header')
@yield('content')
@include('frontend.layout.footer')

 <!--Start of Tawk.to Script-->
   <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/648aa63394cf5d49dc5dc9c2/1h2upifmc';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
   <!--End of Tawk.to Script-->
     <!--- Footer Start -->
     <script src="{{asset('frontend/assets/js/jquery.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/bootstrap-datepicker.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/jquery.filterizr.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/meanmenu.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/form-validator.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/contact-form-script.js') }}"></script>
     <script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
     <script src="{{asset('frontend/assets/js/script.js') }}"></script>
  </body>

</html>
