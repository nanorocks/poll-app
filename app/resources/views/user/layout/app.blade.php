<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        @yield('title')
        </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200">
        @section('nav')
        @if (Route::has('login'))
        <nav class="container mx-auto mt-16 bg-white rounded-lg shadow-md p-4 md:flex">
            @auth
            <img src="{{ Auth::user()->picture }}" class="w-16 h-16 md:w-24 md:h-24 rounded-full mx-auto md:mx-0 md:mr-6">
            <div class="text-center md:text-left">
                <p class="text-lg font-light">{{ Auth::user()->name }}</p>
                <p class="text-purple-500">{{ Auth::user()->nickname }}</p>
                <p class="text-gray-600 mb-2">{{ Auth::user()->email }}</p>
                <a href="{{ route('logout') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-1 px-4 border border-gray-400 rounded shadow text-sm mt-4">Logout</a>
            </div>
            @else
            <a href="{{ route('login') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-1 px-4 border border-gray-400 rounded shadow text-sm mr-2">Login & Signup</a>
            @endauth
        </nav>
        @endif
        @show
        @yield('body')
        @yield('js')
    </body>
</html>