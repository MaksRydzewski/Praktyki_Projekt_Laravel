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
            <input type="text" id="type" name="type" placeholder="Dish type">

            <input type="text" id="name" name="name" placeholder="Dish title">

            <input type="number" id="price" name="price" placeholder="Dish price">

            <textarea name="description" id="description" placeholder="Dish description"></textarea>

            <button type="submit" id="submit">Create dish</button>
    </form>
</div>
</div>
@endsection
