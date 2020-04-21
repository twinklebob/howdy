<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Howdy</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
    <div class="content">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <h1 class="title">Howdy</h1>

        @foreach ($cards as $card)
        {{ $card }}
        @endforeach

        <!-- <div class="card orange">
                <h2>Today is:</h2>
                <p id="day"></p>
            </div>

            <div class="card blue">
                <h2>It's the</h2>
                <p>
                <span id="dom"></span> of
                <span id="month"></span>,
                <span id="year"></span>
                </p>
            </div>

            <div class="card">
                <h2>The season is:</h2>
                <p id="season"></p>
            </div> -->
    </div>
</body>

</html>
