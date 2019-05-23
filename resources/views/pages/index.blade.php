@extends('layout.app')

@section('content')
    
<h1>{{$title}}</h1>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Welcome</h1>
        <p><a class="btn btn-info btn-lg" href="/register" role="button">Sign up</a>
        <a class="btn btn-success btn-lg" href="/login" role="button">Sign in</a></p>
    </div>
        
      </div>
@endsection