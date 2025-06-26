<!-- resources/views/layouts/navigation.blade.php -->
<nav class="bg-gray-800 text-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between">
        <div>
            <a href="{{ route('dashboard') }}" class="text-lg font-bold">Task Manager</a>
        </div>
        <div class="flex space-x-4">
            @auth
                <a href="{{ route('tasks.index') }}" class="hover:underline">Tasks</a>
                <a href="{{ route('profile.edit') }}" class="hover:underline">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:underline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:underline">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:underline">Register</a>
                @endif
            @endauth
        </div>
    </div>
</nav>