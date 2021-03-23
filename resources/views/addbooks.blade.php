@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dodavanje, uređivanje i uklanjanje knjiga

                    <button type="button" class="btn btn-sm btn-outline-secondary float-right" data-toggle="modal" data-target="#addbooksModal">
                        <i class="far fa-plus-square"></i>
                        Dodaj knjigu
                    </button>
                </div>

                <form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('/booksearch') }}">
                    <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
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
                                <th>Radnje</th>
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
                                    <a href="{{ route('addbooks.delete', $book->id)}}" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i> Ukloni</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                    <div class="modal  fade" id="addbooksModal" tabindex="-1" role="dialog" aria-labelledby="addbooksModalLabel" aria-hidden="true">
                        <form id="addbooksForm" method="get" action="{{ route('addbooks.store') }}" >
                            @csrf
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addbooksModalLabel">Knjige</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Zatvori">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title">Naziv knjige</label>
                                            <input type="hidden" id="id" name="id" />
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" placeholder="Unesite naziv djela">
                                             @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>
                                    <div class="form-group">
                                        <label for="Author">Autor</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" placeholder="Unesite autora">
                                        @error('surname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="genre">Žanr</label>
                                        <select class="form-control @error('genre') is-invalid @enderror" name="genre" id="genre" placeholder="Odaberite žanr">
                                            <option value="Drama">Drama</option>
                                            <option value="Fantastika">Fantastika</option>
                                            <option value="Krimi">Krimi</option>
                                            <option value="Ljubavni">Ljubavni</option>
                                            <option value="Povijesni">Povijesni</option>
                                            <option value="Pustolovni">Pustolovni</option>
                                            <option value="Psihološki">Psihološki</option>
                                            <option value="Triler">Triler</option>
                                            <option value="Vestern">Vestern</option>
                                            <option value="Znanstvena fantastika">Znanstvena fantastika</option>
                                        </select>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Cijena</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Unesite cijenu">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pages">Broj stranica</label>
                                        <input type="text" class="form-control @error('pages') is-invalid @enderror" name="pages" id="pages" placeholder="Unesite broj stranica">
                                        @error('pages')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Godina izdanja</label>
                                        <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year" placeholder="Unesite godinu izdanja">
                                    @error('year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                        <label for="image">Slika</label>
                                        <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="Unesite link za sliku">
                                    </div>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                                    <button id="addbooksBtn" type="submit" class="btn btn-primary">Spasi podatke</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection