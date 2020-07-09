<x-app>
    <div>
        <header>
            <p class="font-bold text-lg mb-5">Who to follow</p>

        </header>
        @forelse($users as $user)

            <div class="border border-gray-400 rounded">
                <a href="/profiles/{{ $user->username }}" class="flex items-center mb-5 px-2">
                    <img
                        src="{{ $user->avatar }}"
                        alt="{{ $user->username }}'s avatar"
                        width="50"
                        class="mr-4 rounded-full"
                    >
                    <div>
                        <h4 class="font-bold">{{ '@'. $user->username }}</h4>
                    </div>
                </a>
            </div>
        @empty
            <p>No one to follow </p>
        @endforelse
        {{ $users->links() }}
    </div>
</x-app>
