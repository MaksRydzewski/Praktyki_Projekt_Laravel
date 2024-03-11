@extends('layout')
@section('content')
    <h1>Dishes:</h1>
    @foreach($dishes as $dish)
        <div>
            <h2>
                NAZWA: <a href="{{route('dishes.show', ['id' => $dish->id])}}">
                    {{ $post->title }}
                </a>
            </h2>
            <p>
                {{ $dish->type }}
            </p>
        </div>
    @endforeach
@endsection
