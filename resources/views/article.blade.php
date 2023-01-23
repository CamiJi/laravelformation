@extends('layouts.app')


@section('content')
<h3>{{ $post->content }}</h3>

<span>{{$post->image ? $post->image->path : "Pas d'image"}}</span>



{{-- @foreach ($post->comments as $comment)
<div>{{$comment->content}}</div>

@endforeach --}}

@forelse ($post->comments as $comment)

<div>{{$comment->content}} | crée le {{ $comment->created_at->format('d-m-Y')}}</div>


@empty

<div>Pas de commentaires</div>

@endforelse

<hr>

@forelse($post->tags as $tag)

<div>{{$tag->name}}</div>

@empty
<div>Pas de Tag sur ce post</div>
@endforelse






@endsection