@extends('layouts.app')
@section('content')

<a href="/posts" class="btn btn-secondary mb-4">Go back</a>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $post->title }}</h3>
    </div>
    <div class="card-body">
        {!!$post->body!!}   
    </div>
    <div class="card-footer">
        <small>Written on <em> {{$post->created_at}} </em></small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
    </div>
</div>  
 

@endsection