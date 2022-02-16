@extends('layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{$post->title}}</h2>
            <h5> By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{$post->author->name}}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none"> {{$post->category->name}}</a></h5>

            @if ($post->image)
                <div class="" style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="{{$post->category->name}}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top img-fluid my-3" alt="{{$post->category->name}}">
                @endif

            <article class="fs-5">{!! $post->body !!}</article>

            <br>

            <a href="/posts" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
</div>
    
@endsection