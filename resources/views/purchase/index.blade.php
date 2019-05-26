@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="panel-body">
                           
                            <h1>purchases List</h1>
                            @if(count($purchases)>0)
                            <table class="table table-striped">
                                <tr><th>PurchaseNo</th>
                                    <th>ProductID</th>
                                    <th>Quantity</th>
                                    <th>Date of order</th>
                                    <th>BuyingPrice</th>
                                </tr>
                                
                                @foreach($purchases as $purchase)
                            <tr>
                            <td>{{$purchase->PurchaseNo}}</td>
                            <td>{{$purchase->ProductID}}</td>
                            <td>{{$purchase->Quantity}}</td>
                            <td>{{$purchase->dateOfPurchase}}</td>
                            <td>{{$purchase->BuyingPrice}}</td>
                            
                                </tr>
                                @endforeach
                            </table>
                            @else
                            <p>You have no products</p>
                            @endif
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection