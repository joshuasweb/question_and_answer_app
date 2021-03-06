<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Question and Answer App') }}</title>
                
        <script src="{{ mix('js/app.js') }}" defer></script>        
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-dark">
        @if (Session::has('message'))
            <div class="session-flash alert {{ Session::has('status') ? 'alert-' . Session::get('status') : null }}">
                <div class="container">{{ Session::get('message') }}</div>
            </div>
        @endif
        <main>
            @yield('content')
        </main>
    </body>
</html>
