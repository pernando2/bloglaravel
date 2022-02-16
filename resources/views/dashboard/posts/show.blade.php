@extends('dashboard/layouts/main')


@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{$post->title}}</h2>
            
            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @csrf
                @method('delete')

                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($post->image)
            <div class="" style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid my-3 mt-3" alt="{{$post->category->name}}">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top img-fluid my-3 mt-3" alt="{{$post->category->name}}">
            @endif

            <article class="fs-5">{!! $post->body !!}</article>

            <br>

            <a href="/dashboard/posts" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
</div>
@endsection