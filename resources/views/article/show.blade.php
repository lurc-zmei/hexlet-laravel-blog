@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <div><a href="{{ route('articles.edit', $article->id) }}">Редактировать статью</a></div>
@endsection
