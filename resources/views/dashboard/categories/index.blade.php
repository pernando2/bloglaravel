@extends('dashboard/layouts/main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories, {{ auth()->user()->name }}</h1>
</div>


<div class="table-responsive col-lg-6">
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    Create new category
  </button>
    {{-- <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a> --}}

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
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($categories as $category)    
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    {{-- <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
                    <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#updateModal">
                      <span data-feather="edit"></span>
                    </button>
                    {{-- <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}
                    <form action="/dashboard/categories/{{ $category->id }}" method="POST" class="d-inline">
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

<!-- Modal Create Category-->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dashboard/categories" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Category</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" autofocus>
            @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create Category</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Update Category-->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dashboard/categories/{{ $category->id }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Category</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="nameEdit" value="{{ old('name', $category->name) }}" autofocus>
            @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slugEdit" value="{{ old('slug', $category->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create Category</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })
    
    const nameEdit = document.querySelector('#nameEdit');
    const slugEdit = document.querySelector('#slugEdit');

    nameEdit.addEventListener('change', function(){
        fetch('/dashboard/categories/checkSlug?name=' + nameEdit.value)
        .then(response => response.json())
        .then(data => slugEdit.value = data.slug)
    })
</script>
@endsection