<x-master>
    <div class="mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-300 rounded-lg">
            <div class="">
                <div class="font-bold mb-6">{{ __('Register') }}</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label
                            for="name"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        >
                            {{ __('Name') }}
                        </label>

                        <input
                            id="name"
                            type="text"
                            name="name"
                            class="border border-gray-400 p-2 w-full"
                            value="{{ old('name') }}"
                            required
                            autocomplete="name"
                            autofocus
                        >
                        @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label
                            for="email"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        >
                            {{ __('E-Mail Address') }}
                        </label>

                        <div class="col-md-6">
                            <input
                                id="email"
                                type="email"
                                class="border border-gray-400 p-2 w-full"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                            >
                            @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username"
                               class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

                        <div class="col-md-6">
                            <input id="username" type="text"
                                   class="border border-gray-400 p-2 w-full" name="username"
                                   value="{{ old('username') }}" required autocomplete="username">

                            @error('username')
                            <span class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label
                            for="password"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        >
                            {{ __('Password') }}
                        </label>

                        <input
                            id="password"
                            type="password"
                            class="border border-gray-400 p-2 w-full"
                            name="password"
                            required autocomplete="new-password"
                        >

                        @error('password')
                        <span class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password-confirm"
                               class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>

                        <div class="mb-6">
                            <input
                                id="password-confirm"
                                type="password"
                                class="border border-gray-400 p-2 w-full"
                                name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"
                                    class="px-6 py-3 rounded text-sm uppercase bg-blue-700 text-white"
                            >
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
