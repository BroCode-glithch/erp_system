<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | ERP System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])  {{-- Laravel Vite for styles --}}
</head>
<body>
    <div class="flex">
        {{-- Sidebar --}}
        @include('partials.sidebar')

        <div class="flex-1 flex flex-col">
            {{-- Navbar --}}
            @include('partials.nav')

            {{-- Main Content --}}
            <main class="p-6">
                @yield('content')
            </main>

            {{-- Footer --}}
            @include('partials.footer')
        </div>
    </div>
</body>
</html>
