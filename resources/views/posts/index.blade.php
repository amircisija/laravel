@extends('layouts.app')
@section('content')


<section class="my-5">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Recent Posts</h2>
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="row">
        <div class="col-sm-12">
            @include('inc.messages')
        </div>
    </div>

@if(count($posts) > 0)
@foreach($posts as $post)
    <div class="row mb-4">
        <div class="col-lg-5 col-xl-4">
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid hoverable" src="/storage/cover_images/{{$post->cover_image}}" alt="Image Post">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-xl-8">
            <h2 class="font-weight-bold mb-3">
                <strong>{{$post->title}}</strong>
            </h2>
            <p class="dark-grey-text">{!!$post->body!!}</p>
            <hr>
            <p>
            Written by {{$post->user->name}} <br> <small>{{ $post->created_at}}</small></p>
            <a href="/posts/{{$post->id}}" class="btn btn-unique btn-sm">Read more</a>
        </div>
    </div>
@endforeach
@else
    <p>No posts found</p>
@endif
    <div class="row">
        <div class="col-sm-12">
            {!! $posts->render() !!}
        </div>
    </div>

</section>

@endsection