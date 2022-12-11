
@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                edit
            </h1>
        </div>
        <div class="card">
            <div class="m-auto">
                <div>
                    <h3>edit post</h3>
                    <form action="{{route('admin.post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <p>title</p>
                        <p><input type="text" name="title" value="{{$post->title}}"></p>
                        <div class="form-group">
                            <label>content</label>
                            <textarea class="form-control" rows="3" name="content">{{$post->content}}</textarea>
                        </div>
                        <p>private</p>
                        <p><input type="text" name="private" value="{{$post->private}}"></p>
                        <div class="form-group">
                            <label>Изображение</label>
                            <input class="form-control" type="file" name="image">
                        </div>
                        <input type="submit" class="btn btn-primary m-3" value="Edit">
                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection

