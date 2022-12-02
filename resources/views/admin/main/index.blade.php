
@extends('admin.layouts.main')
@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">private</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </tr>
            </thead>
            @foreach($posts as $post)
            <tbody>
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->private}}</td>
                <td><a href="{{route('admin.post.edit-post',$post->id)}}">Edit</a></td>
                <td><form action="{{route('admin.post.delete',$post->id)}}" method="POST">
                        @csrf
                        <button type="submit" class="border-0 bg-white">
                            <i class="fas fa-trash text-danger" role="button">Delete</i>
                        </button>
                    </form></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
