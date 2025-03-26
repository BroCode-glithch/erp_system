<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white bg-opacity-90 shadow-lg rounded-lg p-8 w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Create an Account</h2>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Full Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" 
                           required autofocus 
                           class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400">
                    @error('name') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" 
                           required 
                           class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400">
                    @error('email') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" id="password" name="password" 
                           required 
                           class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400">
                    @error('password') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                           required 
                           class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400">
                </div>

                <!-- Role Selection -->
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 font-semibold">Select Role</label>
                    <select id="role" name="role" required 
                            class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400">
                        <option value="admin">Admin</option>
                        <option value="program-manager">Program Manager</option>
                        <option value="care-support">Care Support</option>
                    </select>
                    @error('role') 
                        <span class="text-red-500 text-sm">{{ $message }}</span> 
                    @enderror
                </div>

                <!-- Register Button -->
                <div class="mt-6">
                    <button type="submit" 
                            class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                        Register
                    </button>
                </div>

                <!-- Already Have an Account? -->
                <p class="text-center text-gray-600 text-sm mt-4">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Sign in</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>

