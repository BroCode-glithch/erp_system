<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-900">
        <div class="bg-white bg-opacity-20 backdrop-blur-lg p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-white text-2xl font-semibold text-center">Sign In</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mt-4">
                    <label class="block text-white">Email</label>
                    <input type="email" name="email" class="w-full p-2 bg-gray-200 rounded" required>
                </div>

                <div class="mt-4">
                    <label class="block text-white">Password</label>
                    <input type="password" name="password" class="w-full p-2 bg-gray-200 rounded" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded mt-4 hover:bg-blue-700">
                    Login
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
