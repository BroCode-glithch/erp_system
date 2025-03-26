@extends('layouts.master')

@section('title', 'Edit User')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit User Role</h1>

    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        <div class="mb-4">
            <label class="block font-medium text-gray-700">Name:</label>
            <input type="text" value="{{ $user->name }}" class="w-full p-2 border rounded bg-gray-100" disabled>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Email:</label>
            <input type="email" value="{{ $user->email }}" class="w-full p-2 border rounded bg-gray-100" disabled>
        </div>

        <div class="mb-4">
            <label class="block font-medium text-gray-700">Role:</label>
            <select name="role" class="w-full p-2 border rounded">
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                        {{ ucfirst($role->name) }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('admin.users.index') }}" class="ml-4 text-gray-600">Cancel</a>
    </form>
@endsection
