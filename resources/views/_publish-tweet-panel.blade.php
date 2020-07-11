<div class="border border-teal-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="what is your mind"
            autofocus
            required
        >
        </textarea>
        @error('body')
        <span>{{ $message }}</span>
        @enderror
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar}}"
                alt="your profile image"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
            <button
                type="submit"
                class="bg-teal-500 rounded-lg shadow px-10 h-10 text-sm text-white hover:bg-teal-600"
            >
                Post
            </button>
        </footer>
    </form>
    @if(Session::has('message'))
        <div class="text-center">
            <div class="p-2 bg-teal-500 items-center text-white leading-none rounded-lg flex lg:inline-flex"
                 role="alert">
                <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                <span class="font-semibold text-left flex-auto">{{ Session::get('message') }}</span>
            </div>
        </div>
    @endif
</div>

