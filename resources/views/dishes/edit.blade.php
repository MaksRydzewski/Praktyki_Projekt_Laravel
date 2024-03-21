<h1>UPDATE</h1>
    @extends('layout')
@section('content')
<style>
    h1{
        color:#FFFFFF;
        margin-left: 50px;
    }

</style>
<div class="conteiner">
<div class="content">
<form method="POST" action="{{route('dishes.update', ['id' => $dish->id])}}">
        @csrf
        @method('PATCH')
    
            <input type="text" id="type" name="type" value="{{ old('type', $dish->type) }}" placeholder="first meal" >
            @if ($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
            @endif

            <input type="text" id="name" name="name" value="{{ old('name', $dish->name) }}" placeholder="">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif

            <input type="number" id="price" name="price" value="{{ old('price', $dish->price) }}" placeholder="" >
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif

            <textarea name="description" id="description" value="{{ old('description', $dish->description) }}"placeholder="" >{{ old('description', $dish->description) }}
            </textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif

            <button type="submit" id="submit">Update</button>
    </form>


