<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foxy Adventure — Official Page | @yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body class="bg-gray-900">
    <header>
        @include('partials.navbar')
    </header>
    <div>
        @yield('main-container')
    </div>
    {{-- @include('partials.footer') --}}
</body>
</html>