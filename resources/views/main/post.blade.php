@extends('layouts/main')

@section('content')
    <div class="solo-post">
        <h3>{{$post->title}}</h3>
        <img src="{{asset('storage/' . $post->image)}}">
        <p>{{$post->content}}</p>
    </div>
@endsection
