<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- @if (Route::has('admin.product.import'))
        <a href="{{ route('admin.product.import') }}" class="btn btn-warning float-end"><i
                class="bi bi-file-arrow-up"></i></a>
    @endif --}}
    <div class="w-full flex flex-col min-h-screen justify-start gap-7 bg-primary-light py-16 px-4">
        <a href="/" class="w-52 h-14 relative flex items-center justify-center mx-auto">
            <img src={{ asset('Assets/svg/Logo.svg') }} alt="Logo" class="w-full h-full block object-cover">
        </a>
        <div class="w-full flex items-center justify-between gap-x-0 grow-0">
            <a href="/Register"
                class="w-full text-center py-1 font-Montserat font-bold text-sm  text-primary-dark border-b-2 border-b-primary-dark  hover:border-b-primary-dark transition-colors">
                Sign Up
            </a>
            <a href="/Login"
                class="w-full text-center py-1 font-Montserat font-bold text-sm text-text-medium border-b-2 border-b-base-white hover:border-b-primary-dark transition-colors">
                Sign In
            </a>
        </div>
        <form action="POST" class="flex flex-col w-full gap-4 font-Montserat">
            @csrf
            @yield('AuthComponent')

        </form>
    </div>
</body>

</html>
