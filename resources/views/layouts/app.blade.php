<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <style>
    .sriracha-regular {
        font-family: "Sriracha", cursive;
        font-weight: 400;
        font-style: normal;
    }
    </style>
</head>
<body class="sriracha-regular">
    <div id="main">
        <div id="banner">
            @yield('banner')
        </div>
        <div id="menu">
            <a href="{{ url('/')}}">Home</a> 
            <a href="{{ url('/assignment')}}">Assignment</a> 
            <a href="{{ url('/bio')}}">Bio</a>
        </div>
        <div id="content">
            @yield('content')
        </div>
        <div id="footer">
            @yield('footer')
        </div>
    </div>
</body>
</html>