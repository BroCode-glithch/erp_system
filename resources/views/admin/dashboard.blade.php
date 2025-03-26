@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>

    <div class="grid grid-cols-3 gap-6 mt-6">
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl">Users</h2>
            <p class="text-gray-500">Manage system users</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl">Reports</h2>
            <p class="text-gray-500">View system analytics</p>
        </div>
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-xl">Settings</h2>
            <p class="text-gray-500">Configure system settings</p>
        </div>
    </div>
@endsection
