@extends('layouts.app')
@section('content')
<div class="container-md">
            @foreach($orders as $order)
            <div class="item-wrapper" style="margin: auto;">
                    <table class="table table-bordered">
                        <tr>
                            <th>Kupac</th>
                            <th>Name</th>
                            <th>qty</th>
                        </tr>
                        @foreach($order->orderItems as $item)
                        <tr>
                                <td>{{$order->user->name}} {{$order->user->surname}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->pivot->qty}}</td>
                         @endforeach
                        </tr>         
                    </table>
                    <table class="table table-bordered">
                        <tr>
                            
                        <th>Total Price </th>
                            <th>Isporučeno</th>
                        </tr>
                       <tr>
                       <td>{{$order->total}}</td>
                        <td>
                         <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                            <div class="input-group">
                            {{csrf_field()}}
                                <select class="form-control" name="delivered" id="delivered" {{$order->delivered==1?"Da":"Ne" }}>
                                    <option value="" disabled selected hidden>Na čekanju</option>
                                    <option value="1">Isporučeno</option>
                                    <option value="0">Nije isporučeno</option>
                                 </select>
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                        </td>
                       </tr> 
                    </table>

</div> <br>
            @endforeach
    
</div>
@endsection