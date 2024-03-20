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
<form method="POST" action="{{route('dishes.update', ['id' => $data->id])}}">
        @csrf
        @method('PATCH')
    
            <input type="text" id="type" name="type" value="{{ old('type') }}" placeholder="{{$data->type}}" >
            @if ($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
            @endif

            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{$data->name}}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif

            <input type="number" id="price" name="price" value="{{ old('price') }}" placeholder="{{$data->price}}" >
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif

            <textarea name="description" id="description" value="{{ old('description') }}"placeholder="{{$data->description}}" ></textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif

            <button type="submit" id="submit">Update</button>
    </form>


