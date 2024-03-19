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
    
            <input type="text" id="type" name="type" placeholder="{{$data->type}}" >

            <input type="text" id="name" name="name" placeholder="{{$data->name}}">

            <input type="number" id="price" name="price" placeholder="{{$data->price}}" >

            <textarea name="description" id="description" placeholder="{{$data->description}}" ></textarea>

            <button type="submit" id="submit">Update</button>
    </form>


