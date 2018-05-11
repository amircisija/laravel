@extends('layouts.app')
@section('content')


<section class="my-5">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Recent Posts</h2>
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



@if(count($posts) > 0)
@foreach($posts as $post)
    <div class="row mb-4">
        <div class="col-lg-5 col-xl-4">
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Image Post">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-xl-8">
            <h3 class="font-weight-bold mb-3">
                <strong>{{$post->title}}</strong>
            </h3>
            <!-- Excerpt -->
            <p class="dark-grey-text">{{ $post->body}}</p>
            <!-- Post data -->
            <p>by
                <a class="font-weight-bold">Jessica Clark</a>, {{ $post->created_at}}</p>
            <!-- Read more button -->
            <a href="/posts/{{$post->id}}" class="btn btn-primary btn-md">Read more</a>
        </div>
    </div>
@endforeach
@else
    <p>No posts foun</p>
@endif

</section>

@endsection