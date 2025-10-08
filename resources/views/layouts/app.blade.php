<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    @livewireStyles
{{--    <link rel="stylesheet" href="/app.css">--}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
{{ $slot }}

@livewireScripts
</body>
</html>
