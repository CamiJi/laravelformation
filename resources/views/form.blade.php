@extends('layouts.app')

@section('content')
<h1>Créer un nouveau post</h1>
    <form action="{{ route('post.store')}}" method="POST">
        @csrf
        <input type="text" name="title" class="border-gray-600 border-2">
        <textarea name="content"  cols="30" rows="10" class="border-gray-600 border-2"></textarea>
        <button type="submit" class="bg-green-500">Soumettre</button>

    </form>
@endsection