<x-master>
    <div class="mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-300 rounded-lg">
            <div class="">
                <div class="font-bold mb-6">Login</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label
                            for="email"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        >
                            E-maill
                        </label>
                        <input
                            class="border border-gray-400 p-2 w-full"
                            type="email"
                            name="email"
                            id="email"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            required
                        >
                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label
                            for="password"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        >
                            Password
                        </label>
                        <input
                            class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            required
                        >
                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <div>
                            <input
                                class=""
                                type="checkbox"
                                name="remember"
                                id="remember"
                                {{ old('remember') ? 'checked' : '' }}
                            >
                            <label class="text-xs text-gray-700 font-bold uppercase hover:underline" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <button class="py-3 px-4 bg-teal-400 text-white rounded-lg hover:bg-teal-500 mr-4">
                            Login
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-master>
