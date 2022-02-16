@extends('dashboard/layouts/main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts, {{ auth()->user()->name }}</h1>
</div>


<div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>

    @if (session()->has('success'))    
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    @if (session()->has('delete'))    
    <div class="alert alert-danger" role="alert">
      {{ session('delete') }}
    </div>
    @endif

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($post as $posts)    
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $posts->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $posts->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')

                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
@endsection