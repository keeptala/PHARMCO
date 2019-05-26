@extends('layout.app')

@section('content')
    
<h1>Make Purchase</h1>
{!! Form::open(['action' => 'PurchaseController@store','method'=>'POST']) !!}
        {{Form::select("ProductID",
        ['2' => 'bufen', '3' => 'buprenex','3'=>'tums','4'=>'ceptrine']
        , null,
        [
        "class" => "form-group",
        "placeholder" => "Pick a product..."
        ])
        }}
    <div class="form-group">
        {{Form::label('BuyingPrice','Buying price')}}
        {{Form::text('BuyingPrice','',['class'=>'form-control','placeholder'=>'Enter Cost of the Product'])}}
    </div>
    <div class="form-group">
        {{Form::label('Quantity','Quantity')}}
        {{Form::text('Quantity','',['class'=>'form-control','placeholder'=>'Enter quantity purchased'])}}
    </div>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
  
@endsection