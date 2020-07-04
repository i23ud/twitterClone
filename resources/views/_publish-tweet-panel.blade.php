<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="what is your mind"
            required
        ></textarea>
        @error('body')
        <span>{{ $message }}</span>
        @enderror
        <hr class="my-4">
        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar}}"
                alt="your profile image"
                class="rounded-full mr-2"
            >
            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow p-2 text-white"
            >
                Tweet
            </button>
        </footer>
    </form>
</div>
