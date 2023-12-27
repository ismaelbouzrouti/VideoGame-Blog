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
            <p>{{ __('Birthday: ') }} {{ $user->birthday }}</p>
            @if ($user->avatar)
            <p>{{ __('Avatar: ') }} <img src="{{ asset($user->avatar) }}" alt="Avatar"></p>
            @else
            <p>{{ __('Avatar: You did not upload an avatar') }}</p>
            @endif
            <p>{{ __('Short_bio: ') }} {{ $user->short_bio }}</p>
        </div>
    </header>




</section>