@extends('frontend.layout.app')
@section('content')
    <div class="page-title-area ptb2-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Comments Details</h1>
                <ul>
                    <li class="item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="item"><a href="#"><i class='bx bx-chevrons-right'></i>Comments Details</a></li>
                </ul>
            </div>
        </div>

        <div class="bg-image">
            <img src="{{ asset('/uploads/banners/' . $banner->image) }}" alt="Demo Image">
        </div>
    </div>



    <section id="about" class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="video-content mb-30">
                        <section id="team" class="team-section pt-100 pb-70">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-8 col-sm-6 col-md-6">
                                        <div class="item-single mb-30">
                                            <div class="image">
                                                {{-- <img src="{{asset('uploads/testimonials/'.$testimonials->image) }}" alt="Demo Image"> --}}
                                                @php
                                                    $imagePath =
                                                        !empty($testimonials->image) &&
                                                        file_exists(
                                                            public_path('uploads/testimonials/' . $testimonials->image),
                                                        )
                                                            ? asset('uploads/testimonials/' . $testimonials->image)
                                                            : asset('uploads/testimonials/user.png');
                                                @endphp
                                                <img src="{{ $imagePath }}"
                                                    alt="{{ $testimonials->name ?? 'Testimonial Image' }}">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h3>
                                                        <a
                                                            href="#">{{ !empty($testimonials->name) ? $testimonials->name : '' }}</a>
                                                    </h3>
                                                    <span>
                                                        {{ !empty($testimonials->country) ? $testimonials->country : '' }}
                                                    </span>
                                                </div>
                                                <!-- <div class="social-link">
                 <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                 <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                 <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                 <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                 </div>-->
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mb-30">
                        <h2>{{ !empty($testimonials->name) ? $testimonials->name : '' }}</h2>
                        <p>{{ !empty($testimonials->designation) ? $testimonials->designation : '' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{ asset('frontend/assets/img/shape1.png') }}" alt="Background Shape">
        </div>
        <div class="shape shape-2">
            <img src="{{ asset('frontend/assets/img/shape2.png') }}" alt="Background Shape">
        </div>
    </section>


    <hr>
    <section id="about" class="about-section about-style-three ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 m-auto">
                    <div class="about-content">
                        <div class="row">
                            <div class="col-12">
                                <h2>
                                    Feedback Details
                                </h2>
                                <h6>{{ !empty($testimonials->comment_head) ? $testimonials->comment_head : '' }}</h6>
                                <p>{!! !empty($testimonials->comment_content) ? $testimonials->comment_content : '' !!}
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1"><img src="{{ asset('frontend/assets/img/shape1.png') }}" alt="Background Shape"></div>
        <div class="shape shape-2"><img src="{{ asset('frontend/assets/img/shape2.png') }}" alt="Background Shape"></div>
        <div class="shape shape-3"><img src="{{ asset('frontend/assets/img/shape3.png') }}" alt="Background Shape"></div>
        <div class="shape shape-4"><img src="{{ asset('frontend/assets/img/shape4.png') }}" alt="Background Shape"></div>
    </section>
@endsection
