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
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',  'class' => 'float-right'])!!} 
                                    {{Form::hidden('_method', 'DELETE')}} 
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}} 
                                {!!Form::close()!!}
                            </td>
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
