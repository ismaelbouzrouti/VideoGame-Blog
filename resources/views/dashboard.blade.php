<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Search Users') }}
                    </h2>


                    <form action="{{ route('dashboard.search') }}" method="POST">
                        @csrf
                        <input type="text" name="search" placeholder="Search users...">
                        <button type="submit">Search</button>
                    </form>

                    <!-- showing the search sesults -->
                    @if(isset($search))
                    <h3>Search Results for "{{ $search }}":</h3>
                    @if($users->isEmpty())
                    <p>No users found.</p>
                    @else
                    <ul>
                        @foreach($users as $user)
                        <li><a href="{{ route('profile.profile', $user) }}">{{ $user->username }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                    @endif

                    <!-- Admin-only "Posts" button and link -->
                    @if(auth()->user()->isAdmin)
                    <div class="mt-4">
                        <a href="{{ route('posts') }}" class="text-blue-500">Posts</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>