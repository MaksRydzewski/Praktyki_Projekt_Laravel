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
<form method="GET" action="/dishes/index">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
            <input type="text" id="type" name="type" value="{{$data['type']}}" >

            <input type="text" id="name" name="name" value="{{$data['name']}}">

            <input type="number" id="price" name="price" value="{{$data['price']}}" >

            <textarea name="description" id="description" value="{{$data['description']}}" ></textarea>

            <button type="submit" id="submit">Update</button>
    </form>


