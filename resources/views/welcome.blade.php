@extends('layouts/main')

@section('content')

<div>
    <h2 class="page">Бесплатные посты</h2>
    <div class="block-post">
        @foreach($freePosts as $freePost)
        <div class="post">
            <h4><a href="/post/{{$freePost->id}}">{{$freePost->title}}</a></h4>
            <img src="{{asset('storage/' . $freePost->image)}}"class="post-img">
        </div>
        @endforeach

    </div>
    <div>
        <h2 class="page">Платные посты</h2>
        @if(!auth()->user())
            <h3>Чтоб смотреть такой контент нужно зарегистрироваться и оформить подписку</h3>
        @elseif(auth()->user()->subscription == null)
            <h3>Нужно оформить подписку</h3>
        @elseif(auth()->user()->subscription < \Carbon\Carbon::now())
            <h3>Нужно обновить подписку</h3>
        @else
        <div class="block-post">
            @foreach($vipPosts as $vip)
                <div class="post">
                    <h4><a href="/post/{{$vip->id}}">{{$vip->title}}</a></h4>
                    <img src="{{asset('storage/' . $vip->image)}}"class="post-img">
                </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
