<dropdown-trigger class="h-9 flex items-center">
    @isset($user->email)
        <img
            src="{{url('storage/')}}/{{$settings->where('key','logo_light')->first()->image}}?size=256"
            class="rounded-full w-14 h-8 mr-3"
        />
    @endisset

    <span class="text-90">
        {{ $user->name ?? $user->email ?? __('Nova User') }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        <li>
            <a href="{{ route('nova.logout') }}" class="block no-underline text-90 hover:bg-30 p-3">
                {{ __('Logout') }}
            </a>
        </li>

    </ul>
</dropdown-menu>
