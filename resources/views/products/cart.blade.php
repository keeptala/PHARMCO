
@extends('layouts.app')

@section('content')


@if( session::has('cart') and $items)
<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
     
            @foreach($items as $orderedProduct)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                              
                            <div class="col-sm-3 hidden-xs"><img src="{{$orderedProduct['item']['product_image'] }}" width="100" height="100" alt="no-image found" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 >{{ $orderedProduct['item']['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $orderedProduct['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $orderedProduct['qty'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $orderedProduct['price'] * $orderedProduct['qty'] }}</td>
                    <td><a href="" class="btn btn-info">add</a></td>
                    <td><a href="" class="btn btn-warning">subtract</a></td>
                    <td><a href="" class="btn btn-danger">delete</a></td>
                </tr>
            @endforeach
       
 
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total  </strong></td>
        </tr>
        <tr>
            <td><a href="/products" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total </strong></td>
        </tr>
        </tfoot>
    </table>
    @else
        <div class="jumbotron">
            <strong>no products selected yet</strong>
            <a href="/products" class="btn btn-primary">continue shopping</a>
        </div>
    @endif
      @endSection