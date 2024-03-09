@extends('layout')
@section('content')
    <h1>Dishes:</h1>
    @foreach($dishes as $dish)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
        </div>
    @endforeach
@endsection
