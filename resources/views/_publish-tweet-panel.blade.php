<div class="border border-teal-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea
            name="body"
            class="w-full p-2 outline-none resize-none"
            placeholder="Remember, be nice!"
            autofocus
            required
        >
        </textarea>
        @error('body')
        <span>{{ $message }}</span>
        @enderror
        <hr class="my-4">
        <div class="mb-2">
            <label
                class="mx-auto w-64 bg-white flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-lg border border-gray-200 cursor-pointer hover:bg-teal-500 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                </svg>
                <span class="text-base leading-normal">Select a file</span>
                <input type='file' class="hidden" name="image" id="image"/>
            </label>
        </div>
        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar}}"
                alt="your profile image"
                class="rounded-full mr-2"
                width="50"
                height="50"
                loading="lazy"
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

