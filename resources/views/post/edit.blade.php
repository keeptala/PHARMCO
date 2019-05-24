@extends('layout.app')

@section('content')
    
<h1>Create Posts</h1>
{!! Form::open(['action' =>[ 'PostController@update',$post->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body text'])}}
    </div>
    <div class="form-group">
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit Form',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
  
@endsection