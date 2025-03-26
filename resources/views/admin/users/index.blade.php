@extends('layouts.master')

@section('title', 'Manage Users')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Manage Users</h1>

    @if(session('success'))
        <div class="p-3 mb-3 bg-green-500 text-white rounded">{{ session('success') }}</div>
    @endif

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Role</th>
                <th class="py-2 px-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border">{{ $user->name }}</td>
                    <td class="py-2 px-4 border">{{ $user->email }}</td>
                    <td class="py-2 px-4 border">{{ $user->roles->pluck('name')->implode(', ') }}</td>
                    <td class="py-2 px-4 border">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
