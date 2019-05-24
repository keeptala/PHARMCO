@extends('layout.app')
@section('content')
<a href="/post" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<div class="container">
    {!!$post->body!!}
</div><hr>
<small>Written On {{$post->created_at}}</small>
<hr>
<a href="/post/{{$post->id}}/edit" class="btn btn-defaul">Edit</a>
{!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection