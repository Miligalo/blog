@extends('layouts/main')

@section('content')
    <div class="solo-post">
        <h3>{{$post->title}}</h3>
        <img src="{{asset('storage/' . $post->mainImg()->image)}}">
        <p>{{$post->content}}</p>
        <h3>Comment</h3>
        @foreach($comments as $comment)
        <div class="card w-50 m-auto">
            <p>Имя:{{$comment->user->name}}</p>
            <p>{{$comment->comment}}</p>

        </div>
        @endforeach
        @if(!auth()->user())
            <p>Войдите чтоб оставить комментарий</p>
        @else
        <form action="{{route('store.comment')}}" method="POST" class="w-25 m-auto">
            @csrf
            <div class="form-group">
                <label>content</label>
                <textarea class="form-control" rows="3" name="comment"></textarea>
                <input class="visually-hidden" value="{{$post->id}}" name="post_id">
            </div>
            <input type="submit" class="btn btn-primary m-3" value="Добавить">
        </form>
        @endif
    </div>
    <div>
    </div>
@endsection
