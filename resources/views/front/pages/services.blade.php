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
                <h2>{{trans('lang.Services')}}</h2>

                <ul>
                    <li>
                        <a href="/">{{trans('lang.Home')}}</a>
                    </li>
                    <li>{{trans('lang.Services')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Services Area -->
    <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>{{trans('lang.Services')}}</span>
                <h2>{{settings_value('service_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
                <p>{!! settings_value('service_desc_'.app()->getLocale()) !!}.</p>
            </div>

            <div class="row justify-content-center">

                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-image">
                                <img src="{{url('storage')}}/{{$service->image}}"
                                     alt="{{$service->title}}">
                            </div>
                            <div class="services-content">
                                <h3 style="color: white">
                                    {{$service->title}}
                                </h3>
                                <div style="color: white">{!! $service->body !!}</div>

                            </div>
                        </div>
                    </div>
                @endforeach

                {{--                <div class="col-lg-12 col-md-12">--}}
                {{--                    <div class="pagination-area">--}}
                {{--                        <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>--}}
                {{--                        <span class="page-numbers current" aria-current="page">1</span>--}}
                {{--                        <a href="#" class="page-numbers">2</a>--}}
                {{--                        <a href="#" class="page-numbers">3</a>--}}
                {{--                        <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>

    </div>
    <!-- End Services Area -->

    @include('front.pages.talktous')

@endsection
