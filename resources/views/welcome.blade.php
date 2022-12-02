@extends('layouts/main')

@section('content')

<div>
    <h2 class="page">Бесплатные посты</h2>
    <div class="block-post">
        @foreach($freePosts as $freePost)
        <div class="post">
            <h4><a href="/post/1">{{$freePost->title}}</a></h4>
            <img src="{{asset('storage/' . $freePost->image)}}"class="post-img">
        </div>
        @endforeach

    </div>
    <div>
        <h2 class="page">Платные посты</h2>
        @if(!auth()->user())
            <h3>Чтоб смотреть такой контент нужно зарегистрироваться и оформить подписку</h3>
        @elseif(auth()->user()->subscription == 'free')
            <h3>Нужно оформить подписку</h3>
        @else
        <div class="block-post">
            @foreach($vipPosts as $vip)
                <div class="post">
                    <h4><a href="/post/1">{{$vip->title}}</a></h4>
                    <img src="{{asset('storage/' . $vip->image)}}"class="post-img">
                </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
