@extends('layouts.app')

@section('content')
<div class="container-special">
    <div class="row">
        <div class="col" align="center">
            <div class="img-wrapper">
                <a href="#"> 
                    <img src="{{ $book->image }}" height="500px"/>
                </a>
            </div>   
        </div>
        <div class="col">
        <p class="details">  Naziv djela:     {!! $book->title !!}</p> <hr>
        <p class="details">  Ime autora:      {!! $book->author !!}</p><hr>
        <p class="details">  Vrsta djela/žanr:      {!! $book->genre !!}</p><hr>
        <p class="details"> Godina kada je knjiga napisana:       {!! $book->year !!}</p><hr>
        <p class="details">  Broj stranica:     {!! $book->pages !!}</p><hr>
        <p class="details">Cijena:     {{$book->price}} KM</p><hr>
                <a href="{{route('cart.addItem',$book->id)}}" class="button  expanded" style="font-size: 30px">Dodaj u košaricu</a>
    </row>
</div>
@endsection