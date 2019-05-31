
@extends('layouts.app')

@section('content')

    <h1>Shopping Cart</h1>

    @if( session::has('cart') and $items)
    {!! Form::open(['action' =>[ 'OrdersController@store'],'method'=>'POST']) !!}
    @foreach($items as $orderedProduct)
{{--{{dd($orderedProduct)}}--}}
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{$orderedProduct['item']['product_image']}}" class="card-img" style="max-width: 300px;max-height: 300px;" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <label for="{{$orderedProduct['item']['name']}}" class="card-title">{{$orderedProduct['item']['name']}}</label>
                        <div class="card-text">
                            <div class="form-group">
                                {{Form::text("price-".$orderedProduct["ProductID"],$orderedProduct['price'],['class'=>'input-field','0'])}}
                                {{Form::text("qty-".$orderedProduct["ProductID"],$orderedProduct['qty'],['class'=>'input-field','0'])}}
                                {{Form::hidden("item-".$orderedProduct["ProductID"],$orderedProduct['item'])}}
                            </div>
                            <a href="" class="btn btn-outline-danger">delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <input type="hidden" name="productids[]" value="{{$orderedProduct["ProductID"]}}">
    @endforeach

    <a href="/products" class="btn btn-outline-warning"><i class="fas fa-arrow-left"></i>continue shopping</a>

    {{Form::submit('checkout',['class'=>'btn btn-outline-success'])}}
    {!! Form::close() !!}

    @else
        <div class="jumbotron">
            <strong>no products selected yet</strong>
            <a href="/products" class="btn btn-primary">continue shopping</a>
        </div>
    @endif
@endSection
