@extends('layouts.app')
@section('content')

<a href="/posts" class="btn btn-secondary mb-4">Go back</a>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $post->title }}</h3>
    </div>
    <div class="card-body">
        <p>{{ $post->body }}</p>    
    </div>
    <div class="card-footer">
        <small>Written on <em> {{$post->created_at}} </em></small>
    </div>
</div>     

@endsection