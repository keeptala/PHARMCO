@extends('layout.app')

@section('content')

<h1>posts</h1>
@if(count($posts)>0)
@foreach($posts as $post)
<div class="jumbotron">
<h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
<small>Written on{{$post->created_at }} By {{$post->user->name}}</small>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No post found</p>
@endif
@endsection