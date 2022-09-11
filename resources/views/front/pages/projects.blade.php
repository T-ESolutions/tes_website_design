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
                <h2>{{trans('lang.Projects')}}</h2>

                <ul>
                    <li>
                        <a href="/">{{trans('lang.Home')}}</a>
                    </li>
                    <li>{{trans('lang.Projects')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Projects Area -->
    <div class="projects-area pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <span>{{trans('lang.Projects')}}</span>
                <h2>{{settings_value('service_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
            </div>

            <ul class="projects-filter-menu">
                <li class="filter" data-filter="all">All</li>
                @foreach($categories as $category)
                <li class="filter" data-filter=".cat-{{$category->id}}">{{$category->title}}</li>

                @endforeach
            </ul>


            <div id="Container" class="row justify-content-center">
                @foreach($projects as $project)
                    <div class="col-lg-6 col-md-8 mix cat-{{$project->category->id}} development product-design">
                        <div class="single-projects-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                             data-aos-once="true">
                            <div class="projects-image">
                                <a href="{{$project->url}}" target="_blank">
                                    <img src="{{url('storage')}}/{{$project->image}}"
                                         alt="{{$project->title}}">
                                </a>
                            </div>
                            <div class="projects-content">
                                <h3>
                                    {{$project->title}}
                                </h3>
                                <a href="{{$project->url}}" target="_blank"
                                   class="projects-btn">{{trans('lang.show more')}}</a>
                            </div>
                        </div>


                    </div>
                @endforeach
            </div>
        </div>

        <div class="projects-bg-shape-1">
            <img src="assets/images/projects/projects-bg-shape.png" alt="{{settings_value('service_title_'.app()->getLocale())}}">
        </div>
    </div>
    <!-- End Projects Area -->

    @include('front.pages.talktous')

@endsection
