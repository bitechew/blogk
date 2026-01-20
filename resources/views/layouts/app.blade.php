<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-header>@yield('title')</x-header>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</body>
</html>