<div class="left-content">
    <div class="item">
        <a href="/admin">posts</a>
    </div>
    <div class="item">
        <a href="/admin/add">add</a>
    </div>
    <div class="item">
{{--        <a href="{{route('logout')}}">logout</a>--}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="border-0 bg-white">logout</button>
        </form>
    </div>
</div>
