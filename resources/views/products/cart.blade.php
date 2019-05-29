
@extends('layouts.app')

@section('content')


@if($items)
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
     
            @foreach($items as $orderedproduct)       
                <tr>
                    <td data-th="Product">
                        <div class="row">
                              
                            <div class="col-sm-3 hidden-xs"><img src="{{$orderedproduct['item']['product_image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $orderedproduct['item']['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $orderedproduct['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $orderedproduct['qty'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $orderedproduct['price'] * $orderedproduct['qty'] }}</td>
          
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
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
    @endSection