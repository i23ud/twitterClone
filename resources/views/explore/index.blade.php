<x-app>
    <div>
        @forelse($users as $user)
            <a href="/profiles/{{ $user->username }}" class="flex items-center mb-5">
                <img
                    src="{{ $user->avatar }}"
                    alt="{{ $user->username }}'s avatar"
                    width="50"
                    class="mr-4"
                >
                <div>
                    <h4 class="font-bold">{{ '@'. $user->username }}</h4>
                </div>
            </a>
        @empty
            <p>No Users</p>
        @endforelse
        {{ $users->links() }}
    </div>
</x-app>
