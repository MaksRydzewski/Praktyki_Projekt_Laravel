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
<form method="PATCH" action="dishes.index">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
            <input type="text" id="type" name="type" placeholder="Type" >

            <input type="text" id="name" name="name" placeholder="Name">

            <input type="number" id="price" name="price" placeholder="Prcie" >

            <textarea name="description" id="description" placeholder="Description" ></textarea>

            <button type="submit" id="submit">Update</button>
    </form>


