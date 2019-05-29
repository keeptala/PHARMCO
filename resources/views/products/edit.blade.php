@extends('layout.app')

@section('content')
    
<h1>edit {{$product->name}} Product</h1>
{!! Form::open(['action' => ['ProductsController@update',$product->ProductID],'method'=>'POST' ,'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',$product->name,['class'=>'form-control','placeholder'=>'Product Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Brief Description')}}
        {{Form::text('description',$product->description,['class'=>'form-control','placeholder'=>'Enter Description of the Product'])}}
    </div>
    {{Form::select("Supplierid",
        ['1' => "Cosmos pharmacitical limited", '2' => "Laborex Kenya Eupharama",'3'=>"Omaera Pharmaceuticals Ltd",'4'=> "SPHINX PHARMACITICAL LIMITED"]
        , null,
        [
        "class" => "form-group",
        "placeholder" => "Pick your supplier..."
        ])
        }}
    
    {{Form::file("product_image",
             [
                "class" => "form-group",
             ])
    }}
    <div class="form-group">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
  
@endsection