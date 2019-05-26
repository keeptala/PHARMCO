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
                           
                            <h1>Products List</h1>
                            @if(count($products)>0)
                            <table class="table table-striped">
                                <tr><th>Products</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                
                                @foreach($products as $product)
                            <tr><td>{{$product->name}}</td>
                            <td><a href="/purchase/create" class="btn btn-primary">Make Purchase</a></td>
                            {{-- <td>{!!Form::open(['action'=>['ProductsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}</td> --}}
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