@extends('layout.app')
@section('title','Sakshath Sakshath Technologylogy')
@section('content')

    {{-- Index page Body Start --}}



    <div class="slider_area d-flex align-items-center slider2  landing" id="home" style="background-image: {{ asset('uploads/banners/' . $data->image) }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_slider">
                        <div class="slider_content text-center">
                            <div class="slider_text">
                                <div class="slider_text_inner">
                                    <h1>{{$data->heading1}}</h1>
                                    <h1>{{$data->heading2}}</h1>
                                </div>
                                <div class="slider_text_desc pt-4">
                                    <p>{{$data->heading3}}</p>
                                </div>
                                <div class="slider_button pt-5 d-flex">
                                    <div class="button">
                                        <a href="{{url('/IT-Services')}}"> How IT Works <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__bg">
            <canvas id="intro__canvas" data-colors='["#FBA500", "#FF3C00", "#fff"]'></canvas>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology Slider Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Sakshath Technology Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div class="flipbox_area top_feature two pt-40">
        <div class="container">
            <div class="row">

               @foreach ($flipboxs as $item)


                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>{{$item->flip_name}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>{{$item->flip_name}}</h3>
                                </div>
                                <div class="flipbox_desc pt-3">
                                    <p>{{$item->flip_content}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach



            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology Flipbox Top Feature Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Sakshath Technology About Area ----->
    <!--==================================================-->
    <div class="about_area pt-40" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>ABOUT US</h6>
                        </div>
                        <div class="section_main_title">
                            <h1> {{$about->About_heading}} </h1>
                        </div>

                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                        <div class="section_content_text bold pt-5">
                            <p> {{$about->About_content}} </p>
                        </div>

                        <div class="singel_about_left_inner">
                            <div class="button two">
                                <a href="#"> Read More </a>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="single_video">
                        <div class="video_thumb text_center mt-160 ml-100">
                            <img src="images/video1.jpg" alt="">
                            <div class="main_video">
                                <div class="video-icon">
                                    <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="{{$about->About_video}}"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="video_shape">
                            <div class="video_shape_thumb1 bounce-animate">
                                <img src="{{ asset('uploads/banners/' . $about->About_image1) }}" alt="">
                            </div>
                        </div>
                        <div class="video_shape">
                            <div class="video_shape_thumb2 bounce-animate">
                                <img src="{{ asset('uploads/banners/' . $about->About_image2) }}" alt="">
                            </div>
                        </div>
                        <div class="video_shape">
                            <div class="video_shape_thumb3 bounce-animate">
                                <img src="{{ asset('uploads/banners/' . $about->About_image3) }}" alt="">
                            </div>
                        </div>
                        <div class="video_shape">
                            <div class="video_shape_thumb4 bounce-animate">
                                <img src="{{ asset('uploads/banners/' . $about->About_image4) }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology About Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Sakshath Technology Service Area ----->
    <!--==================================================-->

    <div class="flipbox_area pages bg_color2  pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-30">

                        <div class="section_main_title">
                            <h2> Our Services </h2>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

            <div class="col-lg-6">

            <div class="service_single_thumb left">
                        <div class="single_service_inner_thumb">
                            <img src="images/service1.png" alt="">
                        </div>
                        <div class="single_service_brg">
                            <div class="single_service_brg_thumb rotateme">
                                <img src="images/service-rot.png" alt="">
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-lg-6">
            <div class="row">

                @foreach ($sflip as $item)


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">
                                    <div class="techno_flipbox_icon">
                                        <div class="icon">
                                            <i class="flaticon-padlock"></i>
                                        </div>
                                    </div>
                                    <div class="flipbox_title">
                                        <h3>  {{$item->serviceflip_name}} </h3>
                                    </div>
                                    <div class="flipbox_desc">
                                        <p>{{$item->serviceflip_content}}</p>
                                    </div>
                                </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(images/feature1.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3> {{$item->serviceflip_name}} </h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>{{$item->serviceflip_content}}</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="">Read More<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="singel_about_left_inner">
                            <div class="button two">
                                <a href="#"> Read More </a>
                            </div>
                        </div>


                </div>
            </div>
        </div>
        </div>

    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology Service Area ----->
    <!--==================================================-->


    <div class="feature_area pt-30 pb-30">
        <div class="container">

        <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-55">
                        <div class="section_main_title">
                            <h2> Top Four Reasons to Choose <br> Sakshath Sakshath Technologylogies </h2>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                @foreach ($reason as $item)


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="feature_style_eight mb-30 wow flipInY animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: flipInY;">
                        <div class="feature_style_eight_content">
                            <div class="feature_style_eight_icon">
                                <i class="fa fa-laptop"></i>
                                <div class="anim-icon">
                                    <span class="icon icon-1"></span>
                                    <span class="icon icon-2"></span>
                                    <span class="icon icon-3"></span>
                                </div>
                            </div>
                            <div class="feature_style_eight_title pt-4">
                                <h4><a href="{{$item->reason_link}}"> {{$item->reason_name}} </a></h4>
                            </div>
                            <div class="feature_style_eight_text pt-15">
                                <p> {{$item->reason_content}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <!--==================================================-->
    <!----- Start Sakshath Technology Portfolio Area ----->
    <!--==================================================-->
    <div class="portfolio_area pt-20 pb-20" id="works">
        <div class="container">
            <div class="row">
                <!-- Start Section Tile -->
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>PORTFOLIO</h6>
                        </div>
                        <div class="section_main_title">

                            <h2>Our Business</h2>
                        </div>

                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio_nav">
                        <div class="portfolio_menu">
                            <ul class="menu-filtering">
                                <li class="current_menu_item" data-filter="*">All Works</li>
                                @forelse ($portfolio_c as $key => $value)
                                  <li data-filter=".{{$value['class_d']}}" >{{$value['category']}}</li>
                                @empty
                                @endforelse
                                {{-- <li data-filter=".physics" >Branding</li>
                                <li data-filter=".cemes" >Prototype</li>
                                <li data-filter=".math" >UX Research</li>
                                <li data-filter=".english">Web Design</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row image_load">
              @forelse ($portfolio as $key => $value)
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item {{$value['class_d']}}">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="{{ URL::to('/') }}/uploads/portfolio/{{$value['image']}}" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="{{ URL::to('/') }}/uploads/portfolio/{{$value['image']}}"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>{{$value['sub_title']}}</span>
                                <h2><a href="#">{{$value['title']}}</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
              @empty

              @endforelse


                {{-- <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="images/p2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="images/p2.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>UX Research</span>
                                <h2><a href="#">Awesome Creative</a></h2>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="images/p3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="images/p3.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Design, Photoshop</span>
                                <h2><a href="#">Business Solution</a></h2>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes math">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="images/p4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="images/p4.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Software Engineer</span>
                                <h2><a href="#">Company Project</a></h2>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 grid-item physics english">
                    <div class="single_portfolio admin">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="images/p5.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="images/p5.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Photoshop</span>
                                <h2><a href="#">Mastering Web Design</a></h2>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 grid-item math">
                    <div class="single_portfolio admin">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="images/p6.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="images/p6.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Design, Photoshop</span>
                                <h2><a href="#">Awesome Logo Design</a></h2>

                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology Portfolio Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Sakshath Technology Team Area ----->
    <!--==================================================-->
    <div class="team_area bg_color2 pt-20 pb-20">
        <div class="container">
            <div class="row">
                <!-- Start Section Tile -->
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3">

                        <div class="section_main_title">
                            <h2>Team Member</h2>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                @foreach ($member as $item)


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team_style_two mb-4">
                        <div class="team_style_two_thumb">
                            <img src="{{ asset('uploads/banners/' . $item->member_image) }}" alt="" />
                        </div>
                        <div class="team_style_two_content">
                            <div class="team_style_two_title pb-2">
                                <h5> {{$item->member_name}} </h5>
                                <span> {{$item->member_position}} </span>
                            </div>
                            <div class="team_style_two_icon">
                                <a href="{{$item->member_facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$item->member_twitter}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$item->member_linkedin}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$item->member_pinterest}}"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology Team Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Sakshath Technology Video Area ----->
    <!--==================================================-->
    <div class="video_area pt-30 pb-200"style="background-image:url(images/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center white mb-55">
                        <div class="section_main_title">
                            <h2>We Create Real Impact For Those</h2>
                            <h2>Who Partner With Us.</h2>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video_area pb-200">
        <div class="container">
            <div class="row mrt-200">
                <div class="col-lg-12">
                    <div class="single_video">
                        <div class="single_video_thumb">
                            <img src="images/video.png" alt="" style="width: 100%"  />
                        </div>
                    </div>
                    <div class="single-video text-center">
                        <div class="video-icon mrt-345">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="{{$video->v_video}}"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Sakshath Technology Video Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- Start Sakshath Technology Testimonial Area ----->
    <!--==================================================-->
    <div id="review" class="testimonial-bg pt-100 pb-70">
        <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
            <section id="section-quote">
                <div class="col-lg-12">
                    <div class="section_title text_center mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>TESTIMONIAL</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Happy <span>Clients Says</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>

                <!--Left Bubble Images-->
                <div class="container-pe-quote left">
                  @forelse ($t_1 as $key => $value)
                        <div class="pp-quote li-quote-{{$value['id']}} @if($value['id'] == '1') active @endif"  data-textquote="quote-text-{{$value['id']}}">
                            <div class="img animated bounce" ></div>
                        </div>
                  @empty
                  @endforelse

                    {{-- <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                        <div class="img animated bounce"></div>
                    </div> --}}
                </div>
                <!--Left Bubble Images-->

                <!--Center Testimonials-->
                <div class="container-quote carousel-on">
                    <!--Testimonial 1-->
                    @forelse ($testimonials as $key => $value)
                      <div class="quote quote-text-{{$value['id']}} hide-bottom" data-ppquote="li-quote-{{$value['id']}}">
                          <p>'{!!($value['description'])!!}'</p>
                          <div class="container-info">
                              <div class="pp"></div>
                              <div class="name">{{$value['name']}}</div>
                              <div class="job">{{$value['position']}}</div>
                          </div>
                      </div>
                    @empty
                    @endforelse


                    <!--Testimonial 2-->
                    {{-- <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                        <p>'Qonto met my needs straight away. ng has finally become fun, fast andCustomer care is awesome! Period.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Sanuka Santa</div>
                            <div class="job">To To Company</div>
                        </div>
                    </div>

                    <!--Testimonial 3-->
                    <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                        <p>'With Qonto, I've been able to order MasterCard cards in seconds. My purchasing team can now be autonomous with their payments. Qonto is game changer.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Grégoire Pasquet</div>
                            <div class="job">Solf Solution</div>
                        </div>
                    </div>

                    <!--Testimonial 4-->
                    <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                        <p>'Qonto? Easy, fast, efficient. Traditionalng has finally become fun, fast and banks' hassles belong to the past!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Nicolas Puran</div>
                            <div class="job">CEO Founder</div>
                        </div>
                    </div>

                    <!--Testimonial 5-->
                    <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                        <p>'Qonto? A flawless UX and a customer service ng has finally become fun, fast and that cares so much. This is just incredible!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Mathieu Jouhet</div>
                            <div class="job">Freelance @Hello Mat</div>
                        </div>
                    </div>

                    <!--Testimonial 6-->
                    <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                        <p>'I needed a bank similar to a SaaS for LiveMentor: ng has finally become fun, fast and I think I found it.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Jadran</div>
                            <div class="job">Web Development</div>
                        </div>
                    </div>

                    <!--Testimonial 7-->
                    <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                        <p>'I can say 'Goodbye' to the banking pains I had to ng has finally become fun, fast and bear with, and 'hello' to a way to do finance that makes sense.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Digong Frando</div>
                            <div class="job">CEO Officience</div>
                        </div>
                    </div>

                    <!--Testimonial 8-->
                    <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                        <p>'Qonto is 100% in tune with what we do at Alan.eu: a user-friendly service, a user-centric interface and a very reactive customer support.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Samuelian</div>
                            <div class="job">Director & Photo Man</div>
                        </div>
                    </div>

                    <!--Testimonial 9-->
                    <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                        <p>'I have been looking for a modern and efficient banking alternative that could support the development of my business. I'm just wondering why Qonto did not exist before!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Khatry Firmanio</div>
                            <div class="job">CEO Company</div>
                        </div>
                    </div>

                    <!--Testimonial 10-->
                    <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                        <p>'That's just perfect - It rocks baby! ng has finally become fun, fast and You wanna apply at TheFamily? Use Qonto first.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Jadran Parvej Imon</div>
                            <div class="job">CEO Managar</div>
                        </div>
                    </div>

                    <!--Testimonial 11-->
                    <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                        <p>'I wish I could have had Qonto ng has finally become fun, fast andenrolled in the Techstars Paris's first batch!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Bertier Luyt</div>
                            <div class="job">Managing Director</div>
                        </div>
                    </div>

                    <!--Testimonial 12-->
                    <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                        <p>'Thanks to a slick interface and simple ng has finally become fun, fast and features, managing payments and expenses has become a piece of cake!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Darpon Abir Khan</div>
                            <div class="job">Founder Officience</div>
                        </div>
                    </div> --}}
                </div>
                <!--Right Bubble Images-->
                <div class="container-pe-quote right">
                  @forelse ($t_2 as $key => $value)
                        <div class="pp-quote li-quote-{{$value['id']}}" data-textquote="quote-text-{{$value['id']}}">
                            <div class="img animated bounce" ></div>
                        </div>
                  @empty
                  @endforelse
                    {{-- <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                        <div class="img animated bounce"></div>
                    </div> --}}
                    {{-- <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                        <div class="img animated bounce"></div>
                    </div> --}}
                </div>
            </section>
        </div>
    </div>
@endsection
    <!--==================================================-->
    <!----- End Sakshath Technology Testimonial Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- Start Sakshath Technology Contact Area ----->
    <!--==================================================-->
@section('contact')

            <div class="contact_area pt-20 pb-20" style="background-image:url(images/bg-cnt.jpg)" id="contact">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section_title white text_center mb-60 mt-3">
                                <div class="section_main_title">
                                    <h2> Get In Touch </h2>
                                </div>
                                <div class="em_bar">
                                    <div class="em_bar_bg"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="quote_wrapper">
                                <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{url('/contact/store')}}">
                                    @csrf
                                {{-- <form id="contact_form" action="mail.php" method="POST" > --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_box mb-30">
                                                <input type="text" name="contact_name"  placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_box mb-30">
                                                <input type="email" name="contact_email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_box mb-30">
                                                <input type="text" name="contact_phone" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_box mb-30">
                                                <input type="text" name="contact_website" placeholder="Website">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form_box mb-30">
                                                <textarea name="contact_message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="quote_btn text_center">
                                                <button class="btn" type="submit"> Submit </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- <p class="form-message"></p> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    {{-- </form> --}}

    {{-- Index Page Body End --}}

@endsection
