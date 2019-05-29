@extends('layout.app')

@section('content')

<h1>Products</h1>
<section class="cards">
    <div class="row">
        
            @if(count($products)>0)
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src={{$product->product_image}} alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div>{{$product->name}}</div>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="btn-holder"><a href="/addToCart/{{$product->ProductID}}"
                   class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
              </div>
              <div class="card-footer">
                <small style='color:gold'class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
            @endforeach
            {{$products->links()}}
            @else
            <p>No Product found</p>
            @endif
        
    </div>
</section>

@endsection
