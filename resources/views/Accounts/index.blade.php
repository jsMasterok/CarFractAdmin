<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-full h-full flex flex-col pt-16">
    @include('Accounts.Components.Header')
    <main class="w-full flex flex-col py-4">
        @yield('content')
    </main>
</body>

</html>
