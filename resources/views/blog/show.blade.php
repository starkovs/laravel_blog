@extends('templates.base')

@section('page.title','Blog posts')

@section('content')
    <a href="{{route('blog')}}">
        back
    </a>
    <h2>{{$post->title}}</h2>
    <p>
        {{$post->text}}
    </p>

@endsection
