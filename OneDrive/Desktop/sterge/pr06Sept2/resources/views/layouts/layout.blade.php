<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


{{--   adaugat de mine manual:--}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield("doc_title")</title>
    <style>
        body {
            background-color: #2d3748;

        }
        a{
            color:white;
            font-size: 20px;
            font-family: Calibri;
            text-decoration: none;

        }
        #nav{
            display: flex;
            justify-content: center;
            gap: 30px;

        }
        #nav a{
            padding: 10px;
        }
        #nav a:hover{
            background-color: white;
            color: black;

        }

    </style>
</head>
<body>
    <div id="hero">
        <div id="nav">
            <a href="{{route('MainPage')}}">Home</a>
            <a href="{{route('CreateUtilizatori')}}">Creaza nou utilizator</a>
            <a href="{{route('ShowAllUtilizatori')}}">Vezi toti utilizatorii</a>
        </div>
        <div id="mainDiv">
            @yield("content")
        </div>
    </div>


</body>
</html>
