<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/welcome.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-image: url("img/background.png");
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-left">
        <a href="{{ url('http://www.londontrack3.ca') }}">Back to London Track 3</a>
    </div>
    <div class="">
        <a href="{{ url('/logout') }}"> logout </a>
    </div>
    <div class="content">
        <div class="box">
            <div class="title m-b-md">
                London Track 3
            </div>
            <div class="title-two">
                Adaptive Snow School
            </div>
            <div class="title-three">
                Web Portal
            </div>
            <div class="bottom-links">
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <button><a href="{{ route('login') }}">Login</a></button>

                            @if (Route::has('register'))
                                <button><a href="{{ route('register') }}">Register</a></button>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>