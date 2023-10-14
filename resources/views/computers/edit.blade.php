@extends('layout')

@section('title', 'Create Computer')

@section('content')
    <h2>Edit an old computer</h2> <br>
    

    <div class="mt-8">
        <form action="{{route('computers.update',['computer'=>$computer->id])}}" method="POST" class="form bg-white p-6 border-1">
            @csrf
            @method('PUT')
                <div class="form-group">
            <label for="name">Computer Name:</label>
            <input " value="{{$computer->name}} "type="text" id="name" name="name"  placeholder="Enter your name">
            @error('name')
            <div class="form-error">
            {{$message}}

            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="origin">Computer Origin:</label>
            <input type="text" id="origin" name="origin"value="{{$computer->origin}}" placeholder="Enter product origin">
            @error('origin')
            <div class="form-error">
            {{$message}}

            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">ComputerPrice:</label>
            <input type="text" id="price" name="price" value="{{$computer->price}}" placeholder="Enter product price">
            @error('price')
            <div class="form-error">
            {{$message}}

            </div>
            @enderror
        </div>
        <div class="submit-button">
                <input type="submit" value="Submit">
            </div>


        </form>
    </div>
    
@endsection
