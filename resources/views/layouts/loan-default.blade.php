<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Loans') }}</title>
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            width: 100%;
            margin: 0; 
        }
        html {
            scroll-behavior: smooth;
        }
        .bg-black {
            background: linear-gradient(109.6deg, rgb(36, 45, 57) 11.2%, rgb(16, 37, 60) 51.2%, rgb(0, 0, 0) 98.6%);
        }
        .bg-primary-orange {
            background-color: #fec503;
        }
        .primary-orange {
            color: #fec503;
        }
        .org-btn {
            border: 1px solid #fec503;
            color: #fec503;
        }
        .org-btn:hover {
            background-color: #fec503;
            color: white;
        }
        .light-grey {
            color: #6c757d;
        }
        .bg-light-grey {
            background-color: #6c757d;
        }
        .social-buttons-circle-dark-grey {
            background: #1a1d20;
        }
        .move-up:hover {
            background-color: #fec503;
            color: white;
            transition: all .5s;
            transform: translateY(-10px);
        }
        .ng-mrg-t {
            margin-top: -50px;
        }
        footer {
            background-color: #212529;
        }
        .footer-column {
            text-align: center;
        }
        .nav-link {
            padding: 0.1rem 0;
        }
        span.nav-link {
            color: #6c757d;
        }
        span.nav-link:hover {
            color: #fec503;
        }
        span.footer-title {
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
        }
        .fas {
            margin-right: 0.5rem;
        }
        ul.social-buttons li a {
            font-size: 20px;
            line-height: 40px;
            display: block;
            width: 40px;
            height: 40px;
            transition: all 0.3s;
            color: #fff;
            border-radius: 100%;
            outline: 0;
            background-color: #1a1d20;
        }
        ul.social-buttons li a:hover {
            background-color: #fec503;
        }
        .copyright {
            color: white;
        }
        .fa-ellipsis-h {
            color: white;
            padding: 2rem 0;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="w-full h-screen">
        @yield('content')
    </div>
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>