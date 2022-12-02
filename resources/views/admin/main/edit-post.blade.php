
@extends('admin.layouts.main')
@section('content')
    <div class="right-content">
        <div>
            <h3>edit post</h3>
            <form action="{{route('admin.post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <p>title</p>
                <p><input type="text" name="title"></p>
                <div class="form-group">
                    <label>content</label>
                    <textarea class="form-control" rows="3" name="content"></textarea>
                </div>
                <p>private</p>
                <p><input type="text" name="private"></p>
                <div class="form-group">
                    <label>Изображение</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
        </div>
    </div>
    </div>

@endsection

