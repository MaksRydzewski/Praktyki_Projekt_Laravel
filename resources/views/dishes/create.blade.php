@extends('layout')
@section('content')
<style>
    h1{
        color:#FFFFFF;
        margin-left: 50px;
    }
</style>
<div class="conteiner">
<h1>Create a new dish:</h1>
<div class="content">
<form method="POST" action="/dishes">
        @csrf
            <input type="text" id="type" name="type"  value="{{ old('type') }}" placeholder="Dish type">
            @if ($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
            @endif

            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Dish title">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif

            <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="Dish price">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif

            <textarea name="description" id="description" value="{{ old('description') }}" placeholder="Dish description"></textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif

            <button type="submit" id="submit">Create dish</button>
    </form>
</div>
</div>
@endsection
