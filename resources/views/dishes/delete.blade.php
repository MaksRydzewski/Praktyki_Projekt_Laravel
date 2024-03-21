<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.id{color:black}
</style>
<body>
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
</body>
</html>