
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
        <p>PRICE:{{ $dish->price }}</p><a href={{"edit/".$dish['id']}}>EDIT</a>
        </div>
        </form>
        @endforeach


</div>
</div>


@endsection
