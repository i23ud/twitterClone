<div class="bg-gray-500 rounded-lg py-4 px-6 mt-4">
    <h3 class="font-bold text-xl mb-4">Followers</h3>
    <ul>
        @forelse(auth()->user()->followers as $user)
            <li class="{{$loop->last? '': 'mb-4' }}">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt="profile image"
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>No Followers yet!</li>
        @endforelse
    </ul>
</div>
