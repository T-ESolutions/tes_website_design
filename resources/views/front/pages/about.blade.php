@extends('front.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')


    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-3 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500"
                 data-aos-once="true">
                <h2>{{$about->page}}</h2>

                <ul>
                    <li>
                        <a href="/">{{trans('lang.Home')}}</a>
                    </li>
                    <li>{{$about->page}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <div class="about-area border-none pt-100 pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-image" data-tilt>
                        <img src="{{url('storage')}}/{{$about->image}}" alt="{{$about->title}}" data-aos="fade-down"
                             data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-wrap-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                         data-aos-once="true">
                        <div class="about-bg-text">ABOUT US</div>
                        <span>{{$about->page}}</span>
                        <h3>{{$about->title}} <span class="overlay"></span></h3>
                        <p>{!! $about->body !!}.</p>
                    </div>
                </div>
            </div>

            <div class="about-inner-box">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <h3>{{$vision->page}}</h3>
                            <p>{!! $vision->body !!}.</p>

                            {{--                            <div class="about-btn">--}}
                            {{--                                <a href="about-style-1.html" class="default-btn">Know More About Us</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700"
                             data-aos-once="true">
                            <h3>{{$mission->page}}</h3>
                            <p>{!! $mission->body !!}.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-about-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                             data-aos-once="true">
                            <div class="card-image" data-tilt>
                                <img src="{{url('storage')}}/{{$mission->image}}" alt="{{$mission->page}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-circle-shape">
            <img src="{{url('/')}}/assets/images/about/about-circle.png" alt="{{$about->title}}">
        </div>
    </div>


    @include('front.pages.testimonials')

    @include('front.pages.team')

    @include('front.pages.talktous')

@endsection
