@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Administracija korisnika
                </div>
                <form class="form-inline my-2 my-lg-0" type="get" action=" {{ url('/search') }}">
                <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>

                <table class="table table-sm table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Ime korisnika</th>
                                <th>Prezime korisnika</th>
                                <th>Email korisnika</th>
                                <th>Uloga korisnika</th>
                                <th>Radnje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="align-middle">{{ $user->id }}</td>
                                <td class="align-middle">{{ $user->name }}</td>
                                <td class="align-middle">{{ $user->surname }}</td>
                                <td class="align-middle">{{ $user->email }}</td>
                                <td class="align-middle">{{ $user->role }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href = 'edit/{{ $user->id }}' class="btn btn-sm btn-outline-secondary"><i class="far fa-edit"></i> Uredi</a>
                                    <a href="{{ route('users.delete', $user->id)}}" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i> Ukloni</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


@endsection