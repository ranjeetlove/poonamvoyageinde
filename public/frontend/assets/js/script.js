jQuery(function ($) {
   'use strict';
   $('.mean-menu').meanmenu({
      meanScreenWidth: '1199',
   });
   $('.menuCLick').on('click',function(){
      let menu = $(document).find('.headerRightMenu');
      let body = $('body')
      if(menu.hasClass('openMenu')){
         body.removeClass('menuOpen')
         menu.removeClass('openMenu')
      }else{
         body.addClass('menuOpen')
         menu.addClass('openMenu')
      }
   })
   $('.destinationHever').on('click',function(){
      $('.dropMenuInner').toggleClass('openMenuHover')
   })
   $(window).on('scroll', function () {
      $(window).scrollTop() >= 200 ? $('.main-navbar-area').addClass('stickyadd') : $('.main-navbar-area').removeClass('stickyadd');
      $(window).scrollTop() >= 200 ? $('.mainHeaderWrapper').addClass('stickyadd') : $('.mainHeaderWrapper').removeClass('stickyadd');
   });
   $('#languageButton').on('click', function (e) {
      $('.language > .menu').toggle();
      e.preventDefault();
   });
   $('#control li').on('click', function () {
      $(this).addClass('active').siblings().removeClass('active');
   });
   $(document).ready(function() {
      // $('.image-link').magnificPopup({type:'image'});
      $(".popup-image").magnificPopup({type:"image",mainClass:"mfp-zoom-in",removalDelay:260,gallery:{enabled:!0}})
    });
   $('.youtube-popup').magnificPopup({
      disableOn: 320,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
   });
   $('#searchButton').magnificPopup({
      removalDelay: 500,
      callbacks: {
         beforeOpen: function () {
            this.st.mainClass = this.st.el.attr('data-effect');
         }
      },
      midClick: true
   });
   $('.banner-slider').owlCarousel({
      loop: true,
      margin: 0,
      items: 1,
      dots: false,
      dotsContainer: '#owl-custom-dots',
      nav: true,
      navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
   });
   var bannerSlider = $('.banner-slider');
   $('.owl-dot').click(function () {
      bannerSlider.trigger('to.owl.carousel', [$(this).index(), 300]);
   });
   $('.banner-slider-two').owlCarousel({
      loop: true,
      margin: 0,
      items: 1,
      dots: false,
      nav: true,
      navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 8500,
      smartSpeed: 1000
   });
   $('.banner-slider-three').owlCarousel({
      loop: true,
      margin: 0,
      items: 1,
      dots: false,
      nav: true,
      navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 8500,
      smartSpeed: 1000
   });
   $('.testimonial-slider').owlCarousel({
      loop: true,
      nav: true,
      navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      items: 1
   })
   $('.testimonialSlider').owlCarousel({
      loop: true,
      nav: false,
      // navText: ["<i class='bx bx-left-arrow-alt'></i>", "<i class='bx bx-right-arrow-alt'></i>"],
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 4000,
      smartSpeed: 450,
      items:1
   })
   $('.tours-slider').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navText: ["<i class='bx bxs-chevron-left'></i>", "<i class='bx bxs-chevron-right'></i>"],
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsiveClass: true,
      responsive: {
         0: {
            items: 1,
            margin: 10
         },
         768: {
            items: 2,
         },
         991: {
            items: 3,
         },
      }
   })
   $('body').append("<div class='go-top'><i class='bx bx-up-arrow-alt'></i></div>");
   $(window).on('scroll', function () {
      var scrolled = $(window).scrollTop();
      if (scrolled > 600) $('.go-top').addClass('active');
      if (scrolled < 600) $('.go-top').removeClass('active');
   });
   $('.go-top').on('click', function () {
      $('html, body').animate({
         scrollTop: '0',
      }, 500);
   });
   $('body').append("<a href=''></a>");
   $('body').append("");
   try {
      $('.filtr-container').filterizr();
   } catch (err) {}
   $('.date-select').datepicker({
      format: 'mm/dd/yyyy'
   });

   function makeTimer() {
      var endTime = new Date('September 20, 2022 17:00:00 PDT');
      var endTime = (Date.parse(endTime)) / 1000;
      var now = new Date();
      var now = (Date.parse(now) / 1000);
      var timeLeft = endTime - now;
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
      if (hours < '10') {
         hours = '0' + hours;
      }
      if (minutes < '10') {
         minutes = '0' + minutes;
      }
      if (seconds < '10') {
         seconds = '0' + seconds;
      }
      $('#days').html(days + '<span>Days</span>');
      $('#hours').html(hours + '<span>Hours</span>');
      $('#minutes').html(minutes + '<span>Minutes</span>');
      $('#seconds').html(seconds + '<span>Seconds</span>');
   }
   setInterval(function () {
      makeTimer();
   }, 0);
   $('select').niceSelect();
   $('.newsletter-form').validator().on('submit', function (event) {
      if (event.isDefaultPrevented()) {
         formErrorSub();
         submitMSGSub(false, 'Please enter your email correctly.');
      } else {
         event.preventDefault();
      }
   });

   function callbackFunction(resp) {
      if (resp.result === 'success') {
         formSuccessSub();
      } else {
         formErrorSub();
      }
   }

   function formSuccessSub() {
      $('.newsletter-form')[0].reset();
      submitMSGSub(true, 'Thank you for subscribing!');
      setTimeout(function () {
         $('#validator-newsletter').addClass('hide');
      }, 4000)
   }

   function formErrorSub() {
      $('.newsletter-form').addClass('animated shake');
      setTimeout(function () {
         $('.newsletter-form').removeClass('animated shake');
      }, 1000)
   }

   function submitMSGSub(valid, msg) {
      if (valid) {
         var msgClasses = 'validation-success';
      } else {
         var msgClasses = 'validation-danger';
      }
      $('#validator-newsletter').removeClass().addClass(msgClasses).text(msg);
   }
   $('.newsletter-form').ajaxChimp({
      url: 'https://hibootstrap.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&id=42d6d188d9',
      callback: callbackFunction
   });
   $(window).on('load', function (e) {
      $('#loading').delay(30).queue(function () {
         $(this).remove();
      });
   });
}($));

$(document).ready(function(){
    $(".hotalsSlider").owlCarousel({
      items: 3,
      margin: 10,
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
      }
    });
  });

   document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.read-more-toggle').forEach(function (btn) {
         btn.addEventListener('click', function () {
            const moreText = this.previousElementSibling;
            if (moreText.style.display === 'none' || moreText.style.display === '') {
               moreText.style.display = 'inline';
               this.textContent = 'Lire moins...';
            } else {
               moreText.style.display = 'none';
               this.textContent = 'Lire plus...';
            }
         });
      });
   });

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.read-more-toggle').forEach(function (toggle) {
      toggle.addEventListener('click', function () {
        const parent = this.closest('.read-more-text');
        parent.classList.toggle('expanded');

        if (parent.classList.contains('expanded')) {
          this.textContent = 'Lire moins...';
        } else {
          this.textContent = 'Lire plus...';
        }
      });
    });
  }); 

function setTheme(themeName) {
   localStorage.setItem('jaunt_theme', themeName);
   document.documentElement.className = themeName;
}

function toggleTheme() {
   if (localStorage.getItem('jaunt_theme') === 'theme-dark') {
      setTheme('theme-light');
   } else {
      setTheme('theme-dark');
   }
}

(function () {
   if (localStorage.getItem('jaunt_theme') === 'theme-dark') {
      setTheme('theme-dark');
      document.getElementById('slider').checked = false;
   } else {
      setTheme('theme-light');
      document.getElementById('slider').checked = true;
   }
})();


