<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Notification</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Messages</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Booksmarks</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Lists</a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">More</a>
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
