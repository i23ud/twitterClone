<div class="flex">
    <form
        action="{{ $tweet->isLikedBy(auth()->user()) ? '/tweets/' . $tweet->id . '/dislike' : '/tweets/' . $tweet->id . '/like' }}"
        method="POST">
        @csrf
        @if($tweet->isLikedBy(auth()->user()))
            @method('DELETE')
        @endif
        <div
            class="flex items-center mr-4 {{ $tweet->isLikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500' }}">
            <i class="fa fa-thumbs-up fa-lg fill-current mr-1"></i>
            <button type="submit" class="text-xs">{{ $tweet->likes ?: 0 }}</button>
        </div>
    </form>

    <form
        action="{{ $tweet->isDislikedBy(auth()->user()) ? '/tweets/' . $tweet->id . '/dislike' : '/tweets/' . $tweet->id . '/like' }}"
        method="POST">
        @csrf
        @method('DELETE')
        <div
            class="flex items-center {{ $tweet->isDislikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}">
            <i class="fa fa-thumbs-down fa-lg fill-current mr-1"></i>
            <button type="submit" class="text-xs">{{ $tweet->dislikes ?: 0 }}</button>
        </div>
    </form>
</div>
