@extends('layouts.app')

@section('content')
<div class="item-wrapper" style="width: 1200px; margin-right: auto; margin-left: auto;">
    <div class="row">
        <h3>Cart Items</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Naslov</th>
                    <th>Cijena</th>
                    <th>Količina</th>
                    <th>Poništavanje</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        <form method="POST" action="{{ route('cart.update', $cartItem->rowId) }}">
                        @csrf
                        @method('PUT')
                            <input name="qty" type="text" value="{{$cartItem->qty}}">
                            <button type="submit" class="btn btn-primary btn-sm mb-1">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    PDV: ${{Cart::tax()}} <br>
                    Suma: $ {{Cart::subtotal()}} <br>
                    Ukupno: $ {{Cart::total()}}
                </td>
                <td>Broj predmeta u košarici: {{Cart::count()}}

                </td>

            </tr>
            </tbody>
        </table>

        <a href="{{route('checkout.shipping')}}" class="button">Checkout</a>
    </div>

</div>

@endsection