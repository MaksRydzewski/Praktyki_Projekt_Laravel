@extends('layout')
@section('content')
    <h1>DELETE</h1>
    <form method="POST" action="/dishes">
        @csrf
        <label for="">Danie do usunięcia:</label><br>
        <div class="id">
        <input type="number" name="id"><br>
        </div>
            <button type="submit">Create dish</button>
        </div>
    </form>
@endsection