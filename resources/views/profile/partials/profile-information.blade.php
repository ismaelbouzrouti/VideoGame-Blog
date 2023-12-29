<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("View your account's profile information.") }}
        </p>

        <div>
            <p>{{ __('Username: ') }} {{ $user->username }}</p>
            <p>{{ __('Email: ') }} {{ $user->email }}</p>
            @if($user->birthday)
            <p>{{ __('Birthday: ') }} {{ $user->birthday }}</p>
            @else
            <p>{{ __('Birthday: No birthday was provided') }}</p>
            @endif

            @if ($user->avatar)
            <p>{{ __('Avatar: ') }} <img src="{{ asset($user->avatar) }}" alt="Avatar"></p>
            @else
            <p>{{ __('Avatar: No avatar was uploaded') }}</p>
            @endif

            @if($user->short_bio)
            <p>{{ __('Short_bio: ') }} {{ $user->short_bio }}</p>
            @else
            <p>{{ __('Short_bio: No bio was provided') }}</p>
            @endif
        </div>

        <div>
            @auth
            @if(auth()->user()->isAdmin && !$user->isAdmin)
            <form action="{{ route('users.promote', $user) }}" method="POST">
                @csrf
                <button type="submit">Promote to Admin</button>
            </form>
            @endif
            @endauth
        </div>
    </header>




</section>