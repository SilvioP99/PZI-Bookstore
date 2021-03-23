@extends('layouts.app')

@section('content')
<div class="item-wrapper"  style="width: 500px; margin-right: auto; margin-left: auto;">
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Unesite adresu na koju treba dostaviti narudžbu:</h3>
        <form method="post" action="{{ route('address.store') }}" >
        @csrf
        <div class="form-group">
            <label for="addressline">Adresa</label>
            <input type="text" name="addressline" id="addressline" placeholder="Unesite ulicu i broj">
        </div>
        <div class="form-group">
            <label for="addressline">Mjesto</label>
            <input type="text" name="city" id="city" placeholder="Unesite mjesto">
        </div>
        <div class="form-group">
            <label for="addressline">ZIP</label>
            <input type="text" name="zip" id="zip" placeholder="Unesite poštanski broj">
        </div>
        <div class="form-group">
            <label for="addressline">Telefon</label>
            <input type="text" name="phone" id="phone" placeholder="Unesite kontakt broj">
        </div>
        <button type="submit" class="btn btn-primary">Sljedeće</button>
        </form>
    </div>
    
</div>
</div>
@endsection