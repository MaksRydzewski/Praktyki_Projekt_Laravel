@extends('layout')
@section('content')
    <h1>UPDATE</h1>
    <form action="{{ route('dishes.update', ['dish' => $dish->id]) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="type">Typ:</label>
    <input type="text" name="type" value="{{ $dish->type }}"><br>

    <label for="name">Nazwa:</label>
    <input type="text" name="name" value="{{ $dish->name }}"><br>

    <label for="description">Opis:</label>
    <textarea name="description">{{ $dish->description }}</textarea><br>

    <label for="price">Cena:</label>
    <input type="text" name="price" value="{{ $dish->price }}"><br>

    <button type="submit">Aktualizuj</button>
</form>
@endsection
