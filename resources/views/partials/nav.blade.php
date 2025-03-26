<nav class="bg-gray-800 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold">ERP System</a>

        <ul class="flex space-x-6">
            <li><a href="{{ route('dashboard') }}" class="hover:text-gray-300">Home</a></li>

            @role('admin')
                <li><a href="{{ route('admin.dashboard') }}" class="hover:text-gray-300">Admin Dashboard</a></li>
                <li><a href="{{ route('admin.users.index') }}" class="hover:text-gray-300">Manage Users</a></li>
            @endrole

            @role('program-manager')
                <li><a href="{{ route('program-manager.dashboard') }}" class="hover:text-gray-300">Program Manager</a></li>
            @endrole

            @role('care-support')
                <li><a href="{{ route('care-support.dashboard') }}" class="hover:text-gray-300">Care Support</a></li>
            @endrole

            @role('admin')
                <li><a href="{{ route('settings.admin') }}" class="hover:text-gray-300">Settings</a></li>
            @endrole

            @role('program-manager')
                <li><a href="{{ route('settings.manager') }}" class="hover:text-gray-300">Settings</a></li>
            @endrole

            @role('care-support')
                <li><a href="{{ route('settings.support') }}" class="hover:text-gray-300">Settings</a></li>
            @endrole
        </ul>

        <div>
            <span class="text-gray-300">{{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="ml-4 text-red-400 hover:text-red-300">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>
</nav>
