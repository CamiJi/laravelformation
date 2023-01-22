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





@endsection