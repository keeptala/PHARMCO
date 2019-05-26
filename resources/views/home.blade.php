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
                            <a href="/post/create" class="btn btn-primary">Create Post</a>
                            <h1>Your Blog Postss</h1>
                            {{-- @if(count($posts)>0)
                            <table class="table table-striped">
                                <tr><th>title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                
                                @foreach($posts as $post)
                            <tr><th>{{$post->title}}</th>
                            <th><a href="/post/{{$post->id}}/edit" class="btn btn-info"></a>Edit</th>
                            <th><a href="/post/{{$post->id}}/edit" class="btn btn-danger"></a></th>
                                </tr>
                                @endforeach
                            </table>
                            @else
                            <p>You have no posts</p>
                            @endif --}}
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
