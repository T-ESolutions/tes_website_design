<!doctype html>

<html @if(session('lang') == 'en') lang="zxx" @else  lang="ar" dir="rtl" @endif>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if(session('lang') == 'en')
        <meta name="description" content="{{settings_value('meta_description_en')}}">
        <meta name="keywords" content="{{settings_value('meta_keywords_en')}}">
        <meta name="author" content="TESolution Software House">

        <style>


            :root {
                --main-font-family: 'Open Sans', sans-serif;
                --heading-font-family: 'Jost', sans-serif;
                --monoton-font-family: 'Monoton', cursive;
                --main-color: #E7AB1D;
                --optional-color: #3E019A;
                --white-color: #ffffff;
                --black-color: #14042C;
                --paragraph-color: #646464;
                --font-size: 16px;
                --transition: .6s;
                --btn-gradient-color: radial-gradient(circle, #E7AB1D, #f8c600, #eed900, #e0ec00, #cdff05);
            }
            .gray {
                color: gray;
            }
        </style>
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/aos.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/remixicon.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/odometer.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/navbar.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/footer.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/dark.css">
        <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">
    @else

        <meta name="description" content="{{settings_value('meta_description_ar')}}">
        <meta name="keywords" content="{{settings_value('meta_keywords_ar')}}">
        <meta name="author" content="TESolution Software House">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/bootstrap.rtl.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/aos.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/animate.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/remixicon.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/odometer.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/fancybox.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/nice-select.min.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/style.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/navbar.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/footer.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/dark.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/responsive.css">
        <link rel="stylesheet" href="{{url('/')}}/assets_ar/css/rtl.css">

        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    @endif

    <style>
        .truncate {
            display: -webkit-box;
            max-width: 450px;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
    </style>
    @yield('css')

    <title>TES - @yield('title')</title>

    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/favicon.png">
</head>

<body @if(session('lang') == 'en') style="font-family: Tajawal" @endif>

<!-- Start Preloader Area -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
<header class="main-header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-two-with-color">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="{{url('storage')}}/{{ settings_image("logo_light")}}" class="black-logo" alt="{{settings_value('logo_light')}}">
                            <img src="{{url('storage')}}/{{ settings_image("logo_dark")}}" class="white-logo" alt="{{settings_value('logo_dark')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{url('storage')}}/{{ settings_image("logo_light")}}" class="black-logo" alt="{{settings_value('logo_light')}}">
                        <img src="{{url('storage')}}/{{ settings_image("logo_dark")}}" class="white-logo" alt="{{settings_value('logo_dark')}}">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <a href="/"
                                   class="nav-link @if(request()->segment(1) == "" || request()->segment(1) == "home") active @endif">{{trans('lang.Home')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="@if(request()->segment(1) == "" || request()->segment(1) == "home") #Services @else /services @endif"
                                   class="nav-link @if( request()->segment(1) == "services") active @endif">{{trans('lang.Services')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="@if(request()->segment(1) == "" || request()->segment(1) == "home") #projects @else /projects @endif"
                                   class="nav-link  @if( request()->segment(1) == "projects") active @endif">{{trans('lang.Projects')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="/about-us"
                                   class="nav-link @if( request()->segment(1) == "about-us") active @endif">{{trans('lang.AboutUs')}}</a>
                            </li>

                            <li class="nav-item">
                                <a href="/contact-us"
                                   class="nav-link @if( request()->segment(1) == "contact-us") active @endif">{{trans('lang.Contact')}}</a>
                            </li>


                        </ul>

                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <ul class="topbar-action">
                                    <li class="dropdown language-option gray" >
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-global-line"></i>
                                            <span class="lang-name gray" >
                                            @if(session('lang') == 'en')
                                                    ENG
                                                @else
                                                    العربيّة
                                                @endif
                                    </span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            @if(session('lang') == 'en')
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="uk">
                                                    ENG
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="uae">
                                                    العربيّة
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="uae">
                                                    العربيّة
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="uk">
                                                    ENG
                                                </a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                       data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">

                                <ul class="topbar-action">
                                    <li class="dropdown language-option gray" >
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-global-line"></i>
                                            <span class="lang-name gray">
                                            @if(session('lang') == 'en')
                                                    EN
                                                @else
                                                    ع
                                                @endif
                                    </span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            @if(session('lang') == 'en')
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="uk">
                                                    EN
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="uae">
                                                    ع
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{url('lang/ar')}}">
                                                    <img src="{{url('/')}}/assets/images/uae.png" alt="uae">
                                                    ع
                                                </a>
                                                <a class="dropdown-item" href="{{url('lang/en')}}">
                                                    <img src="{{url('/')}}/assets/images/uk.png" alt="uk">
                                                    EN
                                                </a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                       data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

<!-- Sidebar Modal -->
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

            <div class="modal-body">
                <a href="/">
                    <img src="{{url('storage')}}/{{ settings_image("logo_light")}}" class="black-logo" alt="{{settings_value('logo_light')}}">
                    <img src="{{url('storage')}}/{{ settings_image("logo_dark")}}" class="white-logo" alt="{{settings_value('logo_dark')}}">
                </a>
                <div class="sidebar-content">
                    <h3> @if(session('lang') == 'en') {{about_us()->title_en}} @else {{about_us()->title_ar}}@endif</h3>
                    <p> @if(session('lang') == 'en')  {!! about_us()->body_en !!} @else  {!! about_us()->body_ar !!} @endif</p>

                    <div class="sidebar-btn">
                        <a href="/contact-us" class="default-btn">Let’s Talk</a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>@if(session('lang') == 'en') {{settings_value("contact_us_title_en")}} @else {{settings_value("contact_us_title_ar")}} @endif </h3>

                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a
                                href="tel: {{settings_value("call_us")}}"> {{settings_value("call_us")}}</a></li>

                        <li><i class="ri-mail-line"></i> <a
                                href="mailto: {{settings_value("email")}}"> {{settings_value("email")}}</a></li>

                        <li>
                            <i class="ri-map-pin-line"></i> @if(session('lang') == 'en') {{settings_value("address_en")}} @else {{settings_value("address_ar")}} @endif
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li><a href="{{ settings_value("facebook")}}" target="_blank"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li><a href="{{ settings_value("twitter")}}" target="_blank"><i class="ri-twitter-fill"></i></a>
                    </li>
                    <li><a href="{{ settings_value("youtube")}}" target="_blank"><i class="ri-youtube-fill"></i></a>
                    </li>
                    <li><a href="{{ settings_value("instagram")}}" target="_blank"><i class="ri-instagram-fill"></i></a>
                    </li>
                </ul>
                <div class="talk-content">
                    <h3>{{trans('lang.Ready to Get Started?')}}</h3>

                    <form id="contactFormTwo-new" method="post" action="{{url('contact')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required
                                           data-error="Please enter your name"
                                           placeholder="{{trans('lang.Your name')}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                           data-error="Please enter your email"
                                           placeholder="{{trans('lang.Your email address')}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            {{--                            <div class="col-lg-12 col-md-12">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <input type="text" name="phone_number" class="form-control" required--}}
                            {{--                                           data-error="Please enter your phone number"--}}
                            {{--                                           placeholder="Your phone number">--}}
                            {{--                                    <div class="help-block with-errors"></div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                            <textarea name="message" class="form-control" cols="30" rows="6" required
                                                      data-error="Please enter your message"
                                                      placeholder="{{trans('lang.Write your message')}}"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">{{trans('lang.Send Message')}}<span></span>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

