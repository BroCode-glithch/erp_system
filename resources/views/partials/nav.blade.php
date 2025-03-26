<nav class="bg-white shadow p-4 flex justify-between">
    <span>Welcome, {{ Auth::user()->name }}</span>
    <a href="{{ route('logout') }}" class="text-red-500">Logout</a>
</nav>
