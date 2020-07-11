<div class="border-b border-gray-200 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No Tweets yet.</p>
    @endforelse
    {{ $tweets->links() }}

</div>
