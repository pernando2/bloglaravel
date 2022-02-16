@extends('layouts/main')

@section('container')
    <h1>Halaman About Me</h1>
    <h2>{{$nama}}</h2>
    <h2>{{$alamat}}</h2>
    <img src="/img/{{$image}}" alt="" width="200px" class="img-thumbnail rounded-circle">
@endsection