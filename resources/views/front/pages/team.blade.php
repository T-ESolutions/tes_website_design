<!-- Start Team Area -->
<div class="team-area pt-100 pb-75">
    <div class="container">
        <div class="section-title section-style-two">
            <div class="section-bg-text">TEAM</div>
            <span>{{trans('lang.TEAM MEMBER')}}</span>
            <h2>{{settings_value('team_title_'.app()->getLocale())}} <span class="overlay"></span></h2>
            <p>{{settings_value('team_desc_'.app()->getLocale())}} </p>
        </div>

        <div class="row justify-content-center">
            @foreach($teams as $team)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-card">
                        <div class="team-image" data-tilt>
                            <img src="{{url('storage')}}/{{$team->image}}" alt="{{$team->name}}">

                            <ul class="team-social">
                                <li>
                                    <a href="{{$team->facebook}}" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{$team->twitter}}" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{$team->instagram}}" target="_blank">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>{{$team->name}}</h3>
                            <span>{{$team->position}}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End Team Area -->
