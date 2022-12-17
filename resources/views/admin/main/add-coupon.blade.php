
@extends('admin.layouts.main-spark')
@section('content')
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                add coupon
            </h1>
        </div>
        <div class="card">
            <div class="m-auto">
                <div>
                    <h3>add coupon</h3>
                </div>

                <form action="{{route('admin.coupon.store')}}" method="POST">
                    @csrf
                    <p>name</p>
                    <p><input type="text" name="name"></p>
                    <p>duration</p>
                    <p><input type="text" name="duration"></p>
                    <p>discount</p>
                    <p><input type="text" name="discount"></p>
                    <input type="submit" class="btn btn-primary m-3" value="Добавить">
                </form>
                </div>
            </div>
        </div>
        </div>


@endsection
