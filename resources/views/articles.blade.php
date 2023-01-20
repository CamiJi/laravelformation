@extends('layouts.app')


@section('content')
    <h1>Liste des articles</h1>
    <h2>{{ $title }}</h2>
    <h3>{{ $title2 }}</h3>

    <ul>
        @foreach ($posts as $post)
            <li><a href="#">{{ $post }}</a></li>
        @endforeach
    </ul>

@endsection
  