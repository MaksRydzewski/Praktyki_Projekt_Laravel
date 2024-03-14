
@extends('layout')
@section('content')
<style>
    h1{
        color:#FFFFFF;
        margin-left: 50px;
    }
    h2{
        color:
    }
    p{
        color:#82829B;
    }
</style>
<div class="conteiner">
<h1>Dishes list:</h1>
<div class="list">
    <div class="dish">
    @foreach($dishes as $dish)
        <h2>{{ $dish->name}}</h2>
        <p>ID:{{ $dish->id }}</p>
        <p>TYPE:{{ $dish->type }}</p>
        <p>DESCRIPTION:{{ $dish->description }}</p>
        <p>PRICE:{{ $dish->price }}</p>

        <a href="{{edit/.'$dish[id']}}">Update</a>
        <form action="/dishes/{{$dish->id}}">
            <button type="submit">Usuń</button>
        </form>
        @endforeach
    </div>

</div>
</div>
@push('scriptsAfter')
<script>
    addEventListener('onClick', function(){
        this.submit()
    })
    </script>
@endpush
@endsection
