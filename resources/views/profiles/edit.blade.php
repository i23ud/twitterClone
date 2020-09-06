<x-app>
    <form action="/profiles/{{ $user->username }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6 text-center">
            <div class="mx-auto  mb-2 border relative bg-gray-100 mb-2 shadow-inset rounded-lg">
                <img id="image" class="object-cover w-full rounded-lg" src="{{ $user->banner }}"
                     alt="Your banner Image"/>
            </div>

            <label
                for="banner"
                type="button"
                class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <path
                        d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"/>
                    <circle cx="12" cy="13" r="3"/>
                </svg>
                Browse Photo
            </label>

            <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1 mb-1">Click to add profile picture</div>

            <input name="banner" id="banner" class="hidden" type="file">
        </div>
        <div class="mb-6 text-center">
            <div class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                <img id="image" class="object-cover w-full h-32 rounded-full" src="{{ $user->avatar }}"
                     alt="Your Profile Image"/>
            </div>

            <label
                for="avatar"
                type="button"
                class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                     stroke-linecap="round" stroke-linejoin="round">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <path
                        d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"/>
                    <circle cx="12" cy="13" r="3"/>
                </svg>
                Browse Photo
            </label>

            <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Click to add profile picture</div>

            <input name="avatar" id="avatar" class="hidden" type="file">
        </div>
        <div class="mb-6">
            <label
                for="name"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Name
            </label>
            <input
                class="border border-gray-400 rounded-lg 400 p-2 w-full"
                type="text"
                name="name"
                id="name"
                value="{{ $user->name }}"
                required
            >
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="username"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Username
            </label>
            <input
                class="border border-gray-400 rounded-lg 400 p-2 w-full"
                type="text"
                name="username"
                id="username"
                value="{{ $user->username }}"
                required
            >
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="email"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                E-maill
            </label>
            <input
                class="border border-gray-400 rounded-lg 400 p-2 w-full"
                type="email"
                name="email"
                id="email"
                autocomplete="email"
                value="{{ $user->email }}"
                required
            >
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="description"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Description
            </label>
            <input
                class="border border-gray-400 rounded-lg 400 p-2 w-full"
                type="text"
                name="description"
                id="description"
                value="{{ $user->description }}"
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
                class="border border-gray-400 rounded-lg 400 p-2 w-full"
                type="password"
                name="password"
                id="password"
                required
            >
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password_confirmation"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Password Confirmation
            </label>
            <input
                class="border border-gray-400 rounded-lg 400 p-2 w-full"
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required
            >
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="">
            <button class="py-3 px-4 bg-teal-500 text-white rounded-lg mr-4 hover:bg-teal-600">Save</button>
            <a href="/profiles/{{ $user->username }}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>
