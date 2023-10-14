<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/style.css')}}">

</head>
<body>
    <nav>
        <a href="{{ route('home.index')}}">Home</a> 
        <a href="{{ route('home.about')}}">About</a>
        <a href="{{ route('home.contact')}}">Contact</a>
        <a href="{{ route('computers.index')}}">Computers</a>
        <a href="{{ route('computers.create')}}">Create</a>


    </nav>
    <header>
        <h1>@yield('title')</h1>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
