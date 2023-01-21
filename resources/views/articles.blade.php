@extends('layouts.app')


@section('content')
    <h1 class="underline">Liste des articles</h1>
    {{-- <h2>{{ $title }}</h2>
    <h3>{{ $title2 }}</h3> --}}
@if($posts->count() > 0)
    <ul class="list-disc bg-teal-400 list-inside m-2 ml-6">
        @foreach ($posts as $post)
            <li><a href="{{ route("post.show", ["id" => $post->id ]) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@else
<span>Pas de données en BDD</span>
@endif

@endsection
  