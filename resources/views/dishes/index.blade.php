
@extends('layout')
@section('content')
<style>
    h1{
        color:#FFFFFF;
        margin-left: 50px;
    }
    h2{
        color:
    }
    p{
        color:#82829B;
    }
</style>
<div class="conteiner">
<h1>Dishes list:</h1>
<div class="list">
    @foreach($dishes as $dish)
    <div class="dish">
        <h2>{{ $dish->name}}</h2>
        <p>ID:{{ $dish->id }}</p>
        <p>TYPE:{{ $dish->type }}</p>
        <p>DESCRIPTION:{{ $dish->description }}</p>
        <p>PRICE:{{ $dish->price }}</p><a class="update" href={{"edit/".$dish['id']}}>EDIT</a>
        <form action="{{ route('dishes.delete', [ $dish->id ]) }}" method="POST">
    
            @method('delete')
            @csrf
            <input type="hidden" name="delete" value="{{$dish->id}}">
            <button type="submit" id="delete">DELETE</button>
        </form>
       
        </div>
        @endforeach


</div>
</div>


@endsection
