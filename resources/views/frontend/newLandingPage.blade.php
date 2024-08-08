<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <title>@yield('title') </title>
    <meta name="google-site-verification" content="lpK8VQtKX9gpTy4nd5vloLnyctJBRTheNH7vggewunU" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-dark.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css">
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="alternate" href="https://poonamvoyageinde.com/" hreflang="fr-fr" />
    <link rel="alternate" href="https://poonamvoyageinde.com/" hreflang="x-default" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/newLandingCss.css') }}" />

    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $link = 'https';
    } else {
        $link = 'http';
    }

    // Here append the common URL characters.
    $link .= '://';

    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
    //  echo $link;
    ?>
    <link rel="canonical" href="<?php echo $link; ?>" />
</head>

<body>
    <div class="mainBodyWrapper">
        <div class="headerTopWrapper">
            <div class="container-fluid">
                <div class="headerTopMenu">
                    <div class="headerTopLeftMenu flexItem">
                        <div class="headerTopLeft flexItem">
                            <i class='bx bx-phone'></i>
                            <a href="tel:+919818153249">+91 9818153249</a>
                        </div>
                        <span class="headerSap">|</span>
                        <div class="headerTopRight flexItem">
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:poonamvoyageinde@gmail.com">
                                poonamvoyageinde@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="headerTopRightMenu flexItem">
                        <a href="javascript:void(0)" class="headerSocial">Follow Us:- </a>
                        <a href="https://www.facebook.com/profile.php?id=100086158731809" class="headerSocial"><i class='bx bxl-facebook'></i></a>
                        <a href="https://twitter.com/poonamvoyage" class="headerSocial"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.instagram.com/poonamvoyageinde90/" class="headerSocial"><i class='bx bxl-instagram'></i></a>
                        <a href="https://www.youtube.com/channel/UCy77dsmJ9dLPeCIQB5eVAdg" class="headerSocial"><i class='bx bxl-youtube'></i></a>
                        <a href="https://www.linkedin.com/in/khusipal-singh-ba3405252/" class="headerSocial"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://in.pinterest.com/poonamvoyageinde90/" class="headerSocial"><i class='bx bxl-pinterest'></i></a>
                        <span class="headerSap">|</span>
                        <a href="{{route('contactus') }}" class="inquaryBtn">Inquare Now</a>
                    </div>
                </div>
            </div>
        </div>
        <header class="mainHeaderWrapper">
            <div class="container-fluid">
                <div class="headerMenuWrapper">
                    <div class="headerLeftMenu">
                        <a href="{{ route('index') }}" class="headerLefta">
                            <img src="{{ asset('frontend/assets/img/logo/mlogo.jpg') }}" alt=""
                                class="headerLogo">
                        </a>
                        <a href="javascript:void(0)" class="headerMenuIcon menuCLick"><i
                                class="bx bx-menu-alt-right"></i></a>
                    </div>
                    <div class="headerRightMenu">
                        <ul class="list-unstyled flexItem headerMenuList">
                            <li>
                                <a href="javascript:void(0)" class="headerMenuLinks closeMenu"><i
                                        class="bx bxs-x-circle menuCLick"></i></a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}" class="headerMenuLinks">Welcome</a>
                            </li>
                            <li>
                                <a href="{{ route('aboutus') }}" class="headerMenuLinks">Who are we</a>
                            </li>
                            <li class="destinationHever">
                                <a href="#" class="headerMenuLinks">Destinations</a>
                                <ul class="list-unstyled dropMenuInner">
                                        @foreach ($regions as $region)
                                            <li><a href="{{ route('destinationlist', $region->slug) }}">{{ $region->region }}</a></li>
                                        @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('tailormadetrip') }}" class="headerMenuLinks">Tailer-Made trip to
                                    India</a>
                            </li>
                            <li>
                                <a href="{{ route('comments') }}" class="headerMenuLinks">Comments</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}" class="headerMenuLinks">Blogs</a>
                            </li>
                            <li>
                                <a href="{{ route('contactus') }}" class="headerMenuLinks">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="mainContentWrapper">
            <div class="">
                <div class="bannerWrapper">
                    <div class="bannerBox">
                        <img src="https://demo2.themelexus.com/bexper/wp-content/uploads/2023/08/des-single-01.jpg"
                            alt="" class="bannerHome">
                        <div class="bannerTextWrapper">
                            <h2>Tour Guide Agency in India</h2>
                            <p class="bannerTextTop">our dedicated team of local professionals will accompany you
                                throughout your trip, sharing cultural insights, historical anecdotes and practical tips
                                to make your experience authentic and enriching.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bannerFormWrapper">
                    @if (session('success'))
                        <div id="success-message" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Région </label> -->
                                <div class="input-group">
                                    <select class="form-select form-control BannerFormInput" name="region"
                                        aria-label="Default select example">
                                        <option selected>Sélectionner des Régions</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->region }}">{{ $region->region }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Intérêts et activités </label> -->
                                <div class="input-group">
                                    <select class="form-select form-control BannerFormInput" name="interest"
                                        aria-label="Default select example">
                                        <option selected>Sélectionner Intérêts</option>
                                        <option value="Aventure">Aventure</option>
                                        <option value="Welfare">Welfare</option>
                                        <option value="Culture">Culture</option>
                                        <option value="En Immersion">En Immersion</option>
                                        <option value="Événement ou Festival">Événement ou Festival</option>
                                        <option value="Famille">Famille</option>
                                        <option value="Randonnée & Trek">Randonnée & Trek</option>
                                        <option value="Voyage Lent">Voyage Lent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Type d'Hébergement </label> -->
                                <div class="input-group">
                                    <select class="form-select form-control BannerFormInput" name="accommodation"
                                        aria-label="Default select example">
                                        <option selected>Sélectionnez L'Hébergement</option>
                                        <option value="Luxueux">Luxueux</option>
                                        <option value="Charme">Charme</option>
                                        <option value="Maison d'Hôtes">Maison d'Hôtes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>par personne budget </label> -->
                                <div class="input-group">
                                    <select class="form-select form-control BannerFormInput" name="budget"
                                        aria-label="Default select example">
                                        <option selected>Sélectionnez Le Budget</option>
                                        <option value="1000€ - 1500€"> 1000€ - 1500€</option>
                                        <option value="1500€ - 2000€"> 1500€ - 2000€</option>
                                        <option value="2000€ - 2500€"> 2000€ - 2500€</option>
                                        <option value="3000€ - 3500€"> 3000€ - 3500€</option>
                                        <option value="3500€ - 4000€"> 3500€ - 4000€</option>
                                        <option value="Plus de 4000€"> Plus de 4000€</option>
                                    </select>
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Enfants-12 ans </label> -->
                                <div class="input-group">
                                    <select class="form-select form-control BannerFormInput" name="children"
                                        aria-label="Default select example">
                                        <option selected>Sélectionnez Les Enfants</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Date de départ </label> -->
                                <div class="input-group">
                                    <input type="date" class="form-control BannerFormInput" name="departure_date"
                                        required="required" />
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Date de retour</label> -->
                                <div class="input-group">
                                    <input type="date" class="form-control BannerFormInput" name="return_date"
                                        required="required" />
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Courriel </label> -->
                                <div class="input-group">
                                    <input type="email" class="form-control BannerFormInput" name="email"
                                        required="required" placeholder="Courriel" />
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                <!-- <label>Numéro de téléphone</label> -->
                                <div class="input-group">
                                    <input type="phone" class="form-control BannerFormInput" name="phone"
                                        required="required" placeholder="numéro de téléphone" />
                                </div>
                            </div>
                            <div class="bannerFormInputsWrapper">
                                {{-- <a href="#" class="themeBtn">Request a Quate</a> --}}
                                <button type="submit" class="themeBtn">Request a Quote</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid padding30 topDestinationMainWrapper">
            <div class="TopDestinations">
                <h3 class="h3Heading">We Provide Top Destinations</h3>
            </div>
            <div class="TopDestinationsWrapper">
                <div class="row">
                    @foreach ($regions as $region)
                        <div class="col-md-2">
                            <a href="{{ route('destinationlist', $region->slug) }}" class="destinationsCard">
                                <div class="destinationImgae"><img
                                        src="{{ asset('/uploads/regions/' . $region->image) }}"
                                        alt="{{ $region->region }}"></div>
                                <p>{{ $region->region }}</p>
                                {{-- <span>2 Tour</span> --}}
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="TabGroupsFilterWrapper">
            <div class="container">
                <div class="text-center">
                    <h3 class="h3Heading">Popular Featured Destinations</h3>
                    <p class="headingPara">Traveling has helped us understand the meaning of life and helped us
                        become better people. Every time we travel, we see the world with new eyes.</p>
                    <ul id="control" class="list-unstyled TabGroupsFilterUl">
                        <li class="active" data-filter="all">All</li>
                        @foreach ($regions as $key => $region)
                            <?php if ($region->id == 3) {
                                continue;
                            } ?>
                            <li data-filter="{{ $key + 1 }}">{{ $region->region }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="tabGroupCardWrapper">
                    <div class="row filtr-container">
                        @foreach ($regions as $key => $region)
                            @php
                                $tours = App\Models\Tour::where('region_id', $region->id)->get();
                            @endphp
                            @foreach ($tours as $tour)
                                @php
                                    $averageRating = App\Models\Rating::where('tour_id', $tour->id)->avg('rating') ?: 0;
                                @endphp
                                <?php if ($region->id == 3) {
                                    continue;
                                } ?>
                                <div class="col-md-4 col-sm-6 col-xs-6 col-lg-3 filtr-item"
                                    data-category="{{ $key + 1 }}" data-sort="value">
                                    <div class="tabGroupCard">
                                        <div class="tabGroupImageCard">
                                            <img src="{{ file_exists(public_path('uploads/tour/image/' . $tour->image)) ? asset('uploads/tour/image/' . $tour->image) : asset('uploads/tour/image/no-image.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="tabGroupContentWrapper">
                                            <a class="headingtab"
                                                href="{{ route('destinationdetails', ['slug1' => $tour->region->slug, 'slug2' => $tour->slug]) }}">@php
                                                    $checkTitle = strip_tags($tour->title);
                                                @endphp
                                                {{ \Illuminate\Support\Str::limit($checkTitle, 60) }}</a>
                                            <p class="descriptiontab">@php
                                                $check = strip_tags($tour->content);
                                            @endphp
                                                {{ \Illuminate\Support\Str::limit($check, 60) }}
                                            </p>
                                            <div class="tabStar">
                                                <span class="starColor">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i
                                                            class="bx {{ $i <= $averageRating ? 'bxs-star text-warning' : 'bx-star' }}"></i>
                                                    @endfor
                                                </span>
                                                <span class="dayNight">
                                                    {{ $tour->day ?? 0 }} Days / {{ $tour->night ?? 0 }} Nights
                                                </span>
                                            </div>
                                            <div class="tabMore">
                                                <a href="{{ route('destinationdetails', ['slug1' => $tour->region->slug, 'slug2' => $tour->slug]) }}"
                                                    class="tabMoreLink">More Information <i
                                                        class="rotateIcon bx bx-arrow-back"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="gellaryWrapper">
            <div class="container">
            <div class="text-center">
                    <h3 class="h3Heading">Recent Gallery</h3>
                    <p class="headingPara">Traveling has helped us understand the meaning of life and helped us
                        become better people. Every time we travel, we see the world with new eyes.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/WhatsApp Image 2023-03-24 at 3.12.30 PM.jpeg') }}" class="popup-image">
                                <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                <img src="{{ asset('uploads/testimonials/WhatsApp Image 2023-03-24 at 3.12.30 PM.jpeg') }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/rajasthan tour.JPG') }}" class="popup-image">
                                <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                <img src="{{ asset('uploads/testimonials/rajasthan tour.JPG') }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/Notre Séjour en Inde avec Poonam Voyage Inde 18 jours au RAJASTHAN 2 - Copy.jpeg') }}" class="popup-image">
                                <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                <img src="{{ asset('uploads/testimonials/Notre Séjour en Inde avec Poonam Voyage Inde 18 jours au RAJASTHAN 2 - Copy.jpeg') }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/newtest1.jpg') }}" class="popup-image">
                                <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                <img src="{{ asset('uploads/testimonials/newtest1.jpg') }}" alt="gallery image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box-wrapp">
                            <div class="gallery-box style2">
                                <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/new-comment.JPG') }}" class="popup-image">
                                    <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                    <img src="{{ asset('uploads/testimonials/new-comment.JPG') }}" alt="gallery image">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-box style2">
                                <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/image_50413569.JPG') }}" class="popup-image">
                                    <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                    <img src="{{ asset('uploads/testimonials/image_50413569.JPG') }}" alt="gallery image">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-box style2">
                                <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/image_50386689.JPG') }}" class="popup-image">
                                    <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                    <img src="{{ asset('uploads/testimonials/image_50386689.JPG') }}" alt="gallery image">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="gallery-box style2">
                            <div class="gallery-box style2">
                                <div class="gallery-img global-img">
                                <a href="{{ asset('uploads/testimonials/image_50405377.JPG') }}" class="popup-image">
                                    <div class="icon-btn"><i class="fa fa-search-plus"></i></div>
                                    <img src="{{ asset('uploads/testimonials/image_50405377.JPG') }}" alt="gallery image">
                                </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="aboutWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3 class="h3Heading">Tour Operator in India | Tailor - made Tours in India</h3>
                        <p class="toarPara">Poonam Voyage is a travel agency specializing in organizing tailor-made
                            tours in India, with particular expertise in Rajasthan tours. As a Tour Operator in
                            India , we are committed to providing unique and memorable experiences to our clients,
                            exploring the cultural, historical and natural treasures of this fascinating region.</p>
                        <p class="toarPara">Our tailor-made Rajasthan tours are designed to capture the essence of
                            this land steeped in history and splendor. Whether it is a visit to the majestic palaces
                            of Jaipur, a camel ride through the golden dunes of the Thar Desert, or a discovery of
                            the bustling markets of Jodhpur, each itinerary is carefully crafted to satisfy the most
                            discerning expectations of travelers.</p>
                    </div>
                    <div class="col-md-7">
                        <div class="aboutRight">
                            <img src="{{ asset('frontend/assets/img/about/ab5.jpg') }}" width="100%" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid padding30 sectionWrapper">
            <div class="row position-relative">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <h3 class="h3Heading text-white">Best India Tours and Travels. Explore Amazing India Tour
                        Packages</h3>
                    <p class="toarPara text-white">Poonamvoyageinde is the right choice for tourism in India.
                        Specialized for tours in Rajasthan, Gujarat, Kashmir and North India. We provide you with a
                        travel guide in French to enhance your trip.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid padding30 testimonialsWrapper">
            <div class="row position-relative">
                <div class="col-md-6">
                    <h3 class="h3Heading mb-2">Travelers love our locals</h3>
                    <p class="toarPara">Poonamvoyageinde is the right choice for tourism in India.</p>
                    <div class="testimonialsSliderWrapper owl-carousel testimonialSlider">
                        @foreach ($test as $item)
                            <div class="testimonialsItem">
                                <p class="testmonialsText">{!! Str::limit($item->comment_content, 200) !!} <a
                                        href ='{{ route('commentsdetails', $item->slug) }}'>Read More</a></p>
                                @php
                                    $imagePath =
                                        !empty($item->image) &&
                                        file_exists(public_path('uploads/testimonials/' . $item->image))
                                            ? asset('uploads/testimonials/' . $item->image)
                                            : asset('uploads/testimonials/user.png');
                                @endphp
                                <img src="{{ $imagePath }}" class="testimonialsImage"
                                    alt="{{ $testimonials->name ?? 'Testimonial Image' }}">
                                <p class="testmonialsName">{{ !empty($item->name) ? $item->name : '' }}</p>
                                <p class="testmonialsName">{{ !empty($item->country) ? $item->country : '' }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="flexItem testimonialsImages">
                        @php
                            $imagePaths =
                                !empty($test[0]->image) &&
                                file_exists(public_path('uploads/testimonials/' . $test[0]->image))
                                    ? asset('uploads/testimonials/' . $test[0]->image)
                                    : asset('uploads/testimonials/user.png');
                            $imagePath1 =
                                !empty($test[2]->image) &&
                                file_exists(public_path('uploads/testimonials/' . $test[2]->image))
                                    ? asset('uploads/testimonials/' . $test[2]->image)
                                    : asset('uploads/testimonials/user.png');
                        @endphp
                        <img src="{{ $imagePaths }}" alt="">
                        <img src="{{ $imagePath1 }}" alt="">
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingCar d-none d-lg-block" style="right: 2%; bottom: 0%;"><img src="{{ asset('frontend/assets/img/logo/car_1.png') }}" alt="shape"></div>
        </div>
        <div class="TabGroupsFilterWrapper">
            <div class="container">
                <div class="text-center">
                    <h3 class="h3Heading">Our Top Rated Blogs</h3>
                    <p class="headingPara">Traveling has helped us understand the meaning of life and helped us become
                        better people. Every time we travel, we see the world with new eyes.</p>

                </div>
                <div class="tabGroupCardWrapper mt-4">
                    <div class="row filtr-container">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="tabGroupCard blogCard">
                                <div class="tabGroupImageCard blogCardImage">
                                    <img src="https://demo2.themelexus.com/bexper/wp-content/uploads/2023/07/tour-06.jpg"
                                        alt="">
                                </div>
                                <div class="tabGroupContentWrapper blogCardContent">
                                    <span class="tagBlog">
                                        <i class="bx bxs-map"></i>
                                        <span>North India</span>
                                    </span>
                                    <a class="headingtab" href="#">A tourist guide for French people exploring
                                        the hidden gems of India</a>
                                    <p class="descriptiontab">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="flexItem gap-3">
                                        <span class="tagBlog">
                                            <i class="bx bxs-pen"></i>
                                            <span>By Auther</span>
                                        </span>
                                        <span class="tagBlog">
                                            <i class="bx bxs-calendar-alt"></i>
                                            <span>25 July, 2024</span>
                                        </span>
                                    </div>
                                    <div class="text-end">
                                        <a href="" class="readMoreBtn">Read More <i
                                                class="bx bx-arrow-back rotateIcon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="tabGroupCard blogCard">
                                <div class="tabGroupImageCard blogCardImage">
                                    <img src="https://demo2.themelexus.com/bexper/wp-content/uploads/2023/07/tour-06.jpg"
                                        alt="">
                                </div>
                                <div class="tabGroupContentWrapper blogCardContent">
                                    <span class="tagBlog">
                                        <i class="bx bxs-map"></i>
                                        <span>North India</span>
                                    </span>
                                    <a class="headingtab" href="#">A tourist guide for French people exploring
                                        the hidden gems of India</a>
                                    <p class="descriptiontab">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="flexItem gap-3">
                                        <span class="tagBlog">
                                            <i class="bx bxs-pen"></i>
                                            <span>By Auther</span>
                                        </span>
                                        <span class="tagBlog">
                                            <i class="bx bxs-calendar-alt"></i>
                                            <span>25 July, 2024</span>
                                        </span>
                                    </div>
                                    <div class="text-end">
                                        <a href="" class="readMoreBtn">Read More <i
                                                class="bx bx-arrow-back rotateIcon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="tabGroupCard blogCard">
                                <div class="tabGroupImageCard blogCardImage">
                                    <img src="https://demo2.themelexus.com/bexper/wp-content/uploads/2023/07/tour-06.jpg"
                                        alt="">
                                </div>
                                <div class="tabGroupContentWrapper blogCardContent">
                                    <span class="tagBlog">
                                        <i class="bx bxs-map"></i>
                                        <span>North India</span>
                                    </span>
                                    <a class="headingtab" href="#">A tourist guide for French people exploring
                                        the hidden gems of India</a>
                                    <p class="descriptiontab">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <div class="flexItem gap-3">
                                        <span class="tagBlog">
                                            <i class="bx bxs-pen"></i>
                                            <span>By Auther</span>
                                        </span>
                                        <span class="tagBlog">
                                            <i class="bx bxs-calendar-alt"></i>
                                            <span>25 July, 2024</span>
                                        </span>
                                    </div>
                                    <div class="text-end">
                                        <a href="" class="readMoreBtn">Read More <i
                                                class="bx bx-arrow-back rotateIcon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewAllBtn text-center">
                        <a href="" class="readMoreBtn px-5 py-3">View All <i
                                class="bx bx-arrow-back rotateIcon"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding30 aboutWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="aboutRight">
                            <img src="{{ asset('frontend/assets/img/about/ab4.jpg') }}" width="100%" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="h3Heading">Tour Operator in India | Tailor - made Tours in India</h3>
                        <p class="toarPara">As a Tour Guide Agency in India , our dedicated team of local
                            professionals will accompany you throughout your trip, sharing cultural insights,
                            historical anecdotes and practical tips to make your experience authentic and enriching.
                        </p>
                        <p class="toarPara">At Poonam Voyage, we focus on customization, allowing our clients to
                            choose and combine activities according to their preferences. Whether you are interested
                            in architecture, local cuisine, colorful festivals or rural life, we create trips that
                            match your passions.</p>
                        <p class="toarPara">Choose Poonam Voyage to experience an exceptional adventure in the
                            heart of India, exploring Rajasthan with an agency that truly understands the needs and
                            aspirations of travelers eager for unique and authentic discoveries.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="mainFooterWrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footerTextWrapper">
                        <img src="{{ asset('frontend/assets/img/logo/mlogo.jpg') }}" alt="">
                        <p class="footerText">Poonam Voyage India "- is a local agency based in India (New Delhi)
                            specialized in tailor-made trips to Rajasthan with Private Driver and Guide.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled footerUlWrapper">
                        <li>
                            <h4>Our Company</h4>
                        </li>
                        <li><a href="{{ route('aboutus') }}" class="footerLinks">About Us</a></li>
                        <li><a href="{{ route('contactus') }}" class="footerLinks">Contact US</a></li>
                        <li><a href="#" class="footerLinks">Privacy Policy</a></li>
                        <li><a href="#" class="footerLinks">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled footerUlWrapper">
                        <li>
                            <h4>Quick Links</h4>
                        </li>
                        <li><a href="{{ route('comments') }}" class="footerLinks">Comments</a></li>
                        <li><a href="{{ route('blog') }}" class="footerLinks">Blogs</a></li>
                        <li><a href="{{ route('aboutus') }}" class="footerLinks">Who we are</a></li>
                        <li><a href="{{ route('contactus') }}" class="footerLinks">Enquire Now</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-unstyled footerUlWrapper">
                        <li>
                            <h4>Tour Destinations</h4>
                        </li>
                        @foreach ($regions as $region)
                            <li><a href="{{ route('destinationlist', $region->slug) }}"
                                    class="footerLinks">{{ $region->region }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled footerUlWrapper">
                        <li>
                            <h4>Contact Us</h4>
                        </li>
                        <li><a href="tel:+919818153249" class="footerLinks"><i class="bx bx-phone"></i> +91 -
                                9818153249</a></li>
                        <li><a href="mailto:poonamvoyageinde@gmail.com" class="footerLinks"><i
                                    class="bx bx-envelope"></i>
                                mailTo:- poonamvoyageinde@gmail.coms</a> </li>
                        <li><a href="#" class="footerLinks"><i class="bx bx-map"></i> 4,Rathore-Bhawan
                                Prithipura Rasala Road Jodhpur-342001 Rajasthan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/648aa63394cf5d49dc5dc9c2/1h2upifmc';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> -->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.filterizr.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.opacity = 0;
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 500);
                }, 5000);
            }
        });
    </script>
</body>

</html>
