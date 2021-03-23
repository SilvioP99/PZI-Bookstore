@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <br />
            <br />
            <div class="card h-100 text-center">
                <img class="card-img-top"
                    src="http://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Clipart.png"
                    alt="">
                <div class="card-body">
                        <form method="POST" action="{{ route('edit', $user->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Ime:</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="surname">Prezime:</label>
                                <input type="text" class="form-control" name="surname" value="{{ $user->surname }}">
        
                                @error('surname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail:</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
        
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                        <label for="password">Lozinka korisnika</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Unesite lozinku">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Ponovite lozinku korisnika</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Ponovite lozinku">
                                    </div>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
    
                            <button type="submit" class="btn btn-primary">Pošalji</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
       <div class="item-wrapper"> <div class="col-sm-8">
       <h2> Vaše narudžbe </h2>
       <table class="table table-striped table-bordered">
            <tr>
            <th scope="col"> Broj računa </th>
            <th scope="col" > Proizvodi - naslov, količina, cijena </th>
            <th scope="col"> Ukupna cijena </th>
            <th scope="col"> Stanje isporuke </th>
            </tr>
            @foreach($user_orders as $order=>$o)
            <tr>
                <td>{{ $o->id }}</td>
                <td> <table>
                    <tr>
                    
                    </tr> @foreach($o->orderItems as $i)
                    <tr>
                    <td>{{ $i->title }}</td>
                    <td>{{ $i->pivot->qty }}</td>
                    <td>{{ $i->price }}</td>
                    </tr>@endforeach
                </table></td>
                <td>{{ $o->total }}</td>
                <td>  @if($o->delivered)
                                <i class="fas fa-check fa-2x text-success">
                                </i>
                                @else
                                <i class="fas fa-times fa-2x text-danger">
                                </i>
                                @endif</td>
               
            </tr>@endforeach
    </table>
        </div> </div>
    </div>
</div>
<!-- /.row -->

<br>
<br>
<br>
<br>
<br>

<!-- /.row -->

</div>
@endsection