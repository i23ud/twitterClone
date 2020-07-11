<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
    </li>
    <li>
        <div class="flex items-center mb-4 block">
            <a href="#" class="font-bold text-lg">Notification</a>
            <span class="rounded-lg bg-gray-300 uppercase text-xs font-bold ml-3 text-muted p-1 text-white">Soon</span>
        </div>

    </li>
    <li>
        <div class="flex items-center mb-4 block"><a href="#" class="font-bold text-lg">Messages</a>
            <span class="rounded-lg bg-gray-300 uppercase text-xs font-bold ml-3 text-muted p-1 text-white">Soon</span>
        </div>

    </li>
    <li>
        <div class="flex items-center mb-4 block"><a href="#" class="font-bold text-lg">Booksmarks</a>
            <span class="rounded-lg bg-gray-300 uppercase text-xs font-bold ml-3 text-muted p-1 text-white">Soon</span>
        </div>

    </li>
    <li>
        <div class="flex items-center mb-4 block">
            <a href="#" class="font-bold text-lg">Lists</a>
            <span class="rounded-lg bg-gray-400 uppercase text-xs font-bold ml-3 text-muted p-1 text-white">Soon</span>
        </div>

    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <li>
        <div class="flex items-center mb-4 block">
            <a href="#" class="font-bold text-lg">More</a>
            <span class="rounded-lg bg-gray-300 uppercase text-xs font-bold ml-3 text-muted p-1 text-white">Soon</span>
        </div>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button
                class="font-normal text-lg mb-4  text-red-500"
            >
                Logout
            </button>
        </form>
    </li>
</ul>
