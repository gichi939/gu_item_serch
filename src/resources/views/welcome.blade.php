<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/@ericblade/quagga2@1.7.4/dist/quagga.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        
    </head>
    <body class="antialiased">
        <div id="container"></div>

        <p id="result"></p>

    </body>
</html>
