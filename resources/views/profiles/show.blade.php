<x-app>
    <header class="mb-6 relative">
        <div class="relative">

            <img
                src="{{ $user->banner }}"
                alt="Your Profile banner"
                class="rounded-lg mb-2"
                loading="lazy"
            >
            <img
                src="{{ $user->avatar }}"
                alt="profile image"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="width: 150px; left: 50%"
                loading="lazy"
            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-semibold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm mb-2">Joined in {{ $user->created_at->diffForHumans() }}</p>
                <div class="flex items-center justify-around text-sm">
                    <p class="">Following {{ $user->follows()->count()}}</p>
                    <p class="">Followers {{ $user->followers()->count()}}</p>
                </div>
            </div>

            <div class="flex items-center">
                @can('edit', $user)
                    <a href="/profiles/{{ $user->username }}/edit"
                       class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            {{$user->description}}
        </p>

    </header>
    @include('_timeline', [
    'tweets' => $tweets
])
</x-app>
