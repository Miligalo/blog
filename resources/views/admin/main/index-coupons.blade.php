@extends('admin.layouts.main-spark')
    @section('content')
        <div class="container-fluid">
            <div class="header">
                <h1 class="header-title">
                    Tables
                </h1>
            </div>
            <div class="row">
                <div class="col-1 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Coupons Table</h5>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>duration</th>
                                <th>discount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                            <tr>
                                <td>{{$coupon->name}}</td>
                                <td>{{$coupon->duration}}</td>
                                <td>{{$coupon->discount}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    @endsection
