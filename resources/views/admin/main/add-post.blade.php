
@extends('admin.layouts.main')
@section('content')
    <div class="right-content">
        <div>
            <h3>add post</h3>
            <form action="{{route('admin.post.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>title</p>
                <p><input type="text" name="title"></p>
                @error('title')
                <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
                <div class="form-group">
                    <label>content</label>
                    <textarea class="form-control" rows="3" name="content"></textarea>
                </div>
                @error('content')
                <div class="text-damger">Это поле нужно заполнить</div>
                @enderror
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
