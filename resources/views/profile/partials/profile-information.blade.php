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
            <p class="mt-4">{{ __('Avatar: ') }}
            <div class="rounded-full overflow-hidden h-20 w-20">
                <img class="h-full w-full object-cover" src="{{ asset($user->avatar) }}" alt="Avatar">
            </div>
            </p>
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
                <button type="submit" class="bg-green-500 text-white border border-green-500 px-4 py-2 rounded">Promote
                    {{ $user->username }} to Admin</button>
            </form>
            @endif
            @endauth
        </div>
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
    </header>
</section>