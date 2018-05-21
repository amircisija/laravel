@extends('layouts.app')
@section('content')

<a href="/posts" class="btn btn-deep-orange btn-md mb-4">Go back</a>

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
        @if(!Auth::guest())
            @if(!Auth::user()->id == $post->user_id)
            

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-md'])}}

                
            {!!Form::close()!!}
            @endif
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info btn-md">Edit</a>
        @endif
    </div>
</div>  
 

@endsection