<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="h-screen antialiased leading-none font-sans bg-pattern">

    <div class="bg-teal-400 h-2"></div>
    
    <div class="py-10 min-h-full">
        @yield('content')
    </div>

    @include('includes.footer')
</body>
</html>
