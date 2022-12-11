
@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                add post
            </h1>
        </div>
        <div class="card">
            <div class="m-auto">
                <div>
                    <h3>add post</h3>
                </div>

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
                        <input type="submit" class="btn btn-primary m-3" value="Добавить">
                    </form>
                </div>
            </div>
        </div>
        </div>


@endsection
