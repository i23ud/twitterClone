<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src="{{ $tweet->user->avatar}}"
                alt="profile image"
                class="rounded-full mr-2"
                width="50"
                height="50"
                loading="lazy"
            >
        </a>
    </div>


    <section>
        <div class="flex justify-between">
            <a href="{{ route('profile', $tweet->user) }}">
                <div class="flex items-baseline">
                    <h5 class="font-bold ">{{ $tweet->user->name }}</h5>
                    <span class="text-gray-700">{{ "@{$tweet->user->username}" }}</span>
                </div>
            </a>
            <div class="ml-5">
                <form action="tweets/{{ $tweet->id }}/delete" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="font-mono text-sm text-red-500 hover:text-red-700" onclick="return confirm('Are You Sure Want to Delete?')">Delete</button>
                </form>
            </div>
        </div>
        <div class="">
            <div>
                <p class="text-base mb-1">
                    {{ $tweet->body }}
                </p>
            </div>
            @if($tweet->image)
                <div>
                    <img src="{{ $tweet->image }}" alt="tweet image" loading="lazy">
                </div>
            @endif
        </div>
        <div class="text-gray-700 mb-3 text-sm">{{ $tweet->created_at->diffForHumans() }}</div>
        <x-like-buttons :tweet="$tweet"/>
    </section>
</div>
