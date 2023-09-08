@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $photo }}" alt="{{ $name }}" style="width: 500px;" class="img-thumbnail">
@endsection