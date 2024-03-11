<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
form{color:black}
</style>
@extends('layout')
@section('content')
    <h1>UPDATE</h1>
    <form method="POST" action="/dishes">
        @csrf
        <div>
            <input type="text" name="type" placeholder="Dish type">
        </div>
        <div>
            <input type="text" name="name" placeholder="Dish title">
        </div>
        <div>
            <input type="number" name="price" placeholder="Dish title">
        </div>
        <div>
            <textarea name="description" placeholder="Dish description"></textarea>
        </div>
        <div>
            <button type="submit">Create dish</button>
        </div>
    </form>
@endsection
</body>
</html>