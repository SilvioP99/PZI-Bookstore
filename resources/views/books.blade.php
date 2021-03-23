@extends('layouts.app')

@section('title','Knjige')

@section('content')

<div class="container-custom">
    <div class="row">
    @forelse($books as $book)
        <div class="small-3 medium-3 large-3 columns">
            <div class="item-wrapper" style="width: 375px;">
                <div class="img-wrapper">
                    <a href="book/{{$book->id}}">
                        <img src="{{ $book->image }}" height="250px"/>
                     </a>
                </div>
                <h3 class="subheader">
                    <span class="price-tag">{{$book->price}}</span> KM
                </h3>
                    <p style="font-size:20px">
                        {!! $book->title !!} <br>
                        {!! $book->author !!}<br>
                        <a href="{{route('cart.addItem',$book->id)}}" class="button  expanded">Add to Cart</a>
                    </p>
            </div><br>       
        </div>
        @empty


    @endforelse
    </div>
</div>    
@endsection