<!-- Start Choose Area -->
<div class="choose-area border-none pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <div class="section-bg-text">PROCESS</div>
            <span>{{trans('lang.work process')}}</span>
            <h2>{{settings_value('work_process_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
            <p>{{settings_value('work_process_desc_'.app()->getLocale())}}</p>
        </div>

        <div class="row justify-content-center">
            @foreach($work_process as $key=> $single)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                         data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            {{--                        <a href="services-details.html">--}}
                            <img src="{{url('storage')}}/{{$single->image}}"
                                 alt="{{$single->title}}">
                            {{--                        </a>--}}

                            <div class="number">{{$key+1}}</div>
                        </div>
                        <div class="choose-content">
                            <h3>
                                {{$single->title}}
                            </h3>
                            <p>{!! $single->body !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Choose Area -->


<div class="video-area-box">
    <div class="container">
        <div class="video-view-content" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
             data-aos-once="true">
            <div class="video-image">
                <img src="{{url('storage')}}/{{settings_image("video_image")}}" alt="{{settings_value("video_image")}}">
            </div>

            <a href="{{settings_value('video_url')}}" class="video-btn popup-youtube">
                <i class="ri-play-mini-fill"></i>
            </a>
        </div>
    </div>
</div>
<!-- End Video Area -->


<!-- Start Testimonials Area -->
<div class="testimonials-area ptb-100">
    <div class="container-fluid">
        <div class="section-title section-style-two">
            <div class="section-bg-text">FEEDBACK</div>
            <span>{{trans('lang.testimonials')}}</span>
            <h2>{{settings_value('testimonials_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
        </div>

        <div class="testimonials-slides owl-carousel owl-theme">
            @foreach($testimonials as $key=> $testimonial)
                <div class="single-testimonials-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                     data-aos-once="true">
                    <p>
                        {!! $testimonial->body !!}
                    </p>

                    <div class="info-item-box">
                        <img src="{{url('storage')}}/{{$testimonial->user_image}}" class="rounded-circle" alt="{{$testimonial->user_name}}">
                        <h4>{{$testimonial->user_name}}, <span>{{$testimonial->user_position}}</span></h4>
                        <ul class="rating-list">
                            @for ($star = 0; $star < 5; $star++)
                                @if (($testimonial->user_rate > $star) && ($testimonial->user_rate >= $star+1))
                                    <li><i class="ri-star-fill"></i></li>
                                @else
                                <li><i class="ri-star-line"></i></li>
                                @endif
                            @endfor
                            {{--                        <li><i class="ri-star-fill"></i></li>--}}
                            {{--                        <li><i class="ri-star-fill"></i></li>--}}
                            {{--                        <li><i class="ri-star-fill"></i></li>--}}
                            {{--                        <li><i class="ri-star-fill"></i></li>--}}
                            {{--                        <li><i class="ri-star-line"></i></li>--}}
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Testimonials Area -->
