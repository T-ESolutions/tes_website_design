<!-- Start Talk Area -->
<div class="talk-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="talk-image" data-tilt>
                    <img src="{{url('storage')}}/{{settings_image('contact_us_image')}}" alt="{{settings_value('contact_us_image')}}">

                    <div class="talk-circle">
                        <img src="{{url('/')}}/assets/images/talk/talk-circle.png" alt="{{settings_value('contact_us_image')}}">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="talk-content margin-zero">
                    <span>{{trans('lang.LETS TALK')}}</span>
                    <h3>{{settings_value('contact_us_title_'.app()->getLocale())}} <span class="overlay"></span></h3>
                    <p>{{settings_value('contact_us_desc_'.app()->getLocale())}}.</p>

                    <form id="contactFormTwo-new" method="post" action="{{url('contact')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required
                                           data-error="Please enter your name"
                                           placeholder="{{trans('lang.Your name')}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required
                                           data-error="Please enter your email"
                                           placeholder="{{trans('lang.Your email address')}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

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
                                <div id="msgSubmitTwo" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Talk Area -->
