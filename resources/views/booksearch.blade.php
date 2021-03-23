@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pretraga knjiga
                </div>
                <form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('/booksearch') }}">
                <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>

                <table class="table table-sm table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Naslov</th>
                                <th>Autor</th>
                                <th>Žanr</th>
                                <th>Cijena</th>
                                <th>Broj stranica</th>
                                <th>Godina izdanja</th>
                                <th>Slika</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td class="align-middle">{{ $book->id }}</td>
                                <td class="align-middle">{{ $book->title }}</td>
                                <td class="align-middle">{{ $book->author }}</td>
                                <td class="align-middle">{{ $book->genre }} </td>
                                <td class="align-middle">{{ $book->price }} KM</td>
                                <td class="align-middle">{{ $book->pages }}</td>
                                <td class="align-middle">{{ $book->year }}</td>
                                <td class="align-middle"><img src='{{ $book->image }}' height="85px"></img></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href = 'editbook/{{ $book->id }}' class="btn btn-sm btn-outline-secondary"><i class="far fa-edit"></i> Uredi</a>
                                    <a href="{{ route('addbooks.delete', $book->id)}}" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i> Pobriši</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


@endsection