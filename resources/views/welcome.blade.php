<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Nduwe Gawe') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .welcome {
            text-align: center;
            height: 100vh;
        }

        .content {
            top: calc(50% - 200px);
            position: relative;
            display: block;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Masuk</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Daftar</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="container welcome">
        <div class="content">
            <img src="{{asset('icon.png')}}">
            <div class="mb-5">
                <h1 style="font-weight: bold">
                    Buat Undangan Online Kamu Di sini
                </h1>
                <h4 style="color: #555">
                    Menyediakan jasa pembuatan undangan digital,<br>
                    penyebaran undangan, dan buku tamu digital.
                </h4>
            </div>
            <a href="{{ route('home') }}" class="btn btn-gold" style="font-size: large; font-weight: bold; letter-spacing: 1px">
                Buat Undangan</a>
        </div>
    </div>
</div>
</body>
</html>

