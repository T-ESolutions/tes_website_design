<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1280">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ \Laravel\Nova\Nova::name() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('app.css', 'vendor/nova') }}">

    <!-- Tool Styles -->
    @foreach(\Laravel\Nova\Nova::availableStyles(request()) as $name => $path)
        @if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://']))
            <link rel="stylesheet" href="{!! $path !!}">
        @else
            <link rel="stylesheet" href="/nova-api/styles/{{ $name }}">
        @endif
    @endforeach

<!-- Custom Meta Data -->
    @include('nova::partials.meta')

<!-- Theme Styles -->
    @foreach(\Laravel\Nova\Nova::themeStyles() as $publicPath)
        <link rel="stylesheet" href="{{ $publicPath }}">
    @endforeach

    <style>
        @media (max-width: 992px){
            .notification-menu {
                margin-left: -125px;
                margin-top: 8px;
            }
            .profile-menu{
                visibility: hidden;
            }
        }
    </style>



    <style>
        @media (max-width: 992px){
            html:not([dir="rtl"]) div[dusk$='index-component'] .btn[dusk='create-button'], html:not([dir="rtl"]) div[dusk$='index-component'] .btn[dusk='attach-button'] {
                font-size: 18px;
                width: 66px;
                content: 'te'!important;
            }
            html:not([dir="rtl"]) div[dusk$='index-component'] .btn[dusk='create-button']::before, html:not([dir="rtl"]) div[dusk$='index-component'] .btn[dusk='attach-button']::before {
                margin-right: 5px!important;
                content: 'إنشاء......';
            }
        }

        ul.sidemenu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

    </style>

</head>
<body class="min-w-site bg-40 text-90 font-medium min-h-full">
<div id="nova">
    <div v-cloak class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="min-h-screen flex-none pt-header min-h-screen w-sidebar bg-grad-sidebar px-6">
            <a href="{{ \Laravel\Nova\Nova::path() }}">
                <div class="absolute pin-t pin-l pin-r bg-logo flex items-center w-sidebar h-header px-6 text-white">
                    @include('nova::partials.logo')
                </div>
            </a>

            @foreach (\Laravel\Nova\Nova::availableTools(request()) as $tool)
                {!! $tool->renderNavigation() !!}
            @endforeach
        </div>

        <!-- Content -->
        <div class="content">
            <div class="flex items-center relative shadow h-header bg-white z-20 px-view">
                <a v-if="@json(\Laravel\Nova\Nova::name() !== null)" href="{{ \Illuminate\Support\Facades\Config::get('nova.url') }}" class="no-underline dim font-bold text-90 mr-6">
                    {{ \Laravel\Nova\Nova::name() }}
                </a>

                {{--                    @if (count(\Laravel\Nova\Nova::globallySearchableResources(request())) > 0)--}}
                {{--                        <global-search dusk="global-search-component"></global-search>--}}
                {{--                    @endif--}}

                <div class="mr-auto" style="margin-right: 200px;">
                    <index-notifications/>
                </div>

                <dropdown class="ml-auto h-9 flex items-center dropdown-right profile-menu">
                    @include('nova::partials.user')
                </dropdown>
            </div>

            <div data-testid="content" class="px-view py-view mx-auto">
                @yield('content')

                @include('nova::partials.footer')
            </div>
        </div>
    </div>
</div>

<script>
    window.config = @json(\Laravel\Nova\Nova::jsonVariables(request()));
</script>

<!-- Scripts -->
<script src="{{ mix('manifest.js', 'vendor/nova') }}"></script>
<script src="{{ mix('vendor.js', 'vendor/nova') }}"></script>
<script src="{{ mix('app.js', 'vendor/nova') }}"></script>

<!-- Build Nova Instance -->
<script>
    window.Nova = new CreateNova(config)
</script>

<!-- Tool Scripts -->
@foreach (\Laravel\Nova\Nova::availableScripts(request()) as $name => $path)
    @if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://']))
        <script src="{!! $path !!}"></script>
    @else
        <script src="/nova-api/scripts/{{ $name }}"></script>
    @endif
@endforeach

<!-- Start Nova -->
<script>
    Nova.liftOff()
</script>

<script>
    function initFreshChat() {
        window.fcWidget.init({
            token: "654c7c6c-3fab-4433-b747-f75858ada048",
            host: "https://wchat.freshchat.com"
        });
    }


    (function (d, w, c) { if(!d.getElementById("spd-busns-spt")) { var n = d.getElementsByTagName('script')[0], s = d.createElement('script'); var loaded = false; s.id = "spd-busns-spt"; s.async = "async"; s.setAttribute("data-self-init", "false"); s.setAttribute("data-init-type", "opt"); s.src = 'https://cdn.freshbots.ai/assets/share/js/freshbots.min.js'; s.setAttribute("data-client", "5da5d9371f7e93eb5076a80d58cf92e33f6ef885"); s.setAttribute("data-bot-hash", "b86c46135fb9c99505e38b6df95a966c973cc4ab"); s.setAttribute("data-env", "prod"); s.setAttribute("data-region", "us"); if (c) { s.onreadystatechange = s.onload = function () { if (!loaded) { c(); } loaded = true; }; } n.parentNode.insertBefore(s, n); } }) (document, window, function () { Freshbots.initiateWidget({ autoInitChat: false, getClientParams: function () { return {"cstmr::eml":"","cstmr::phn":"","cstmr::nm":""}; } }, function(successResponse) { }, function(errorResponse) { }); });

</script>

</body>
</html>
