@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>

    <div class="grid grid-cols-3 gap-6 mt-6">
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">Users</h2>
            <p class="text-gray-500">Total Users: {{ \App\Models\User::count() }}</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">Roles</h2>
            <p class="text-gray-500">Total Roles: {{ \Spatie\Permission\Models\Role::count() }}</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">Settings</h2>
            <p class="text-gray-500">Configure System Settings</p>
        </div>
    </div>
@endsection
