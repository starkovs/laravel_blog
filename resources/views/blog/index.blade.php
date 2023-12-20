@extends('templates.base')

@section('page.title','Blog')

@section('content')


    <h1 class="mb-4">Posts list</h1>

    @if(empty($posts))
        No posts
    @else
        @foreach($posts as $post)
            <div>
                <a href="{{route('blog.show', $post->id)}}">
                    <h4>{{$post->title}}</h4>
                </a>
                <hr>
            </div>

        @endforeach
    @endif

@endsection
