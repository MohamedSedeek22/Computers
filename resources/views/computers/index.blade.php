@extends('layout')

@section('title', 'Computers')

@section('content')
    <h1>Welcome to Our computers</h1>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer List</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <ul class="computer-list">
            @foreach ($computers as $computer)
            <li class="computer-item">
                <a href="{{ route('computers.show', ['computer' => $computer['id']]) }}">
                    <p class="computer-info">
                        {{ $computer['name'] }} {{ $computer['origin'] }} <strong>({{ $computer['price'] }}$)</strong>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>

@endsection