@extends('layouts.app')

@section('content')
<h2>{{ $title }}</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit harum molestias velit tenetur accusamus necessitatibus minima commodi, ea, inventore animi adipisci et placeat aut magnam illo repellat voluptatibus voluptatum vero.</p>

@if(count($services) > 0)
    <ul class="list-group">
    @foreach($services as $service)
        <li class="list-group-item">{{ $service }}</li>
    @endforeach
    </ul>
@endif

@endsection