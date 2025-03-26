<aside class="w-64 bg-gray-800 text-white h-screen p-4">
    <h2 class="text-lg font-bold mb-4">ERP System</h2>

    <nav>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                   class="block p-3 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
                    📊 Dashboard
                </a>
            </li>

            @can('manage users')
                <li>
                    <a href="{{ route('admin.users.index') }}"
                       class="block p-3 rounded {{ request()->routeIs('admin.users.index') ? 'bg-gray-700' : 'hover:bg-gray-700' }}">
                        👥 Manage Users
                    </a>
                </li>
            @endcan

            <li>
                <a href="#" class="block p-3 rounded hover:bg-gray-700">
                    ⚙️ Settings
                </a>
            </li>
        </ul>
    </nav>
</aside>
