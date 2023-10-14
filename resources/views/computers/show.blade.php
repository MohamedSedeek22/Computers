@extends('layout')

@section('title', 'Show Computer')

@section('content')
    <h2>Welcome to Our computers</h2>
    <br>

    <div class="mt-8">
        <li>{{ $computer['name'] }} if from <strong>{{ $computer['origin'] }}  </strong>({{ $computer['price'] }}$ )</li>
    </div>
    <div><a class="edit.btn" href="{{route('computers.edit',$computer->id)}}">Edit</a>
    
        <form action="{{route('computers.destroy',$computer->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input class="delete-btn" type="submit" value="delete">
        </form>
</div>
@endsection