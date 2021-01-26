@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Administracija korisnika</div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary mb-4 float-right" data-bs-toggle="modal" data-bs-target="#addUsersModal">
                        Dodavanje korisnika
                    </button>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Ime korisnika</th>
                            <th>Prezime korisnika</th>
                            <th>Email korisnika</th>
                            <th>Uloga korisnika</th>
                            <th>Datum i vrijeme registracije</th>
                            <th>Opcije</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger"><i>Izbriši</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="modal fade" id="addUsersModal" tabindex="-1" role="dialog" aria-labelledby="addUsersModalLabel" aria-hidden="true">
                        <form id="addUsersForm" method="POST" action="{{ route('users.add') }}">
                        @crsf
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addUsersModalLabel">Dodavanje korisnika</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori">
                                        <span aria-hidden="true">&times</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Ime korisnika</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Prezime korisnika</label>
                                            <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="surname" value="{{ old('surname') }}">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Email korisnika</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Lozinka korisnika</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Ponovite lozinku korisnika</label>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror " name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                                        <button id="addUserBtn" type="button" class="btn btn-primary">Pohrani podatke</button>
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
