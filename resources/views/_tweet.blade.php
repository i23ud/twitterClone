<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src="{{ $tweet->user->avatar}}"
                alt="profile image"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>


    <div>
        <a href="{{ route('profile', $tweet->user) }}">
            <div class="flex items-baseline">
                <h5 class="font-bold mr-2">{{ $tweet->user->name }}</h5>
                <span class="text-gray-700 mb-2">{{ "@{$tweet->user->username}" }}</span>
            </div>
        </a>
        <p class="text-base mb-1">
            {{ $tweet->body }}
        </p>
        <div class="text-gray-700 mb-3 text-sm">{{ $tweet->created_at->diffForHumans() }}</div>
        <x-like-buttons :tweet="$tweet"/>
    </div>
</div>
