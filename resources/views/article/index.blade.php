@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        {{-- <h2>{{$article->name}}</h2> --}}
        <h2>
            <a href="{{ route('articles.show', $article->id) }}">{{$article->name}}</a>
        </h2>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
    <h2><a href="{{ route('articles.create') }}">Создать статью</a></h2>
@endsection
