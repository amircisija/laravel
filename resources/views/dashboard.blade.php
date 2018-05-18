@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                        <th>{{ $post->title}}</th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></th>
                            <th></th>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p class="alert alert-warning">No posts</p>
                    @endif
                    <a href="/posts/create" class="btn btn-info">Create Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
