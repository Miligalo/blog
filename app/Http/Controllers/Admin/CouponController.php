<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Coupon\StoreRequest;
use App\Models\Coupon;
use Stripe\Stripe;
use Stripe\StripeClient;

class CouponController
{
    public function index(){
        $coupons = Coupon::all();
        return view('admin.main.index-coupons',compact('coupons'));
    }
    public function create(){
        return view('admin.main.add-coupon');
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        $stripe = new StripeClient(env('STRIPE_SECRET'));
        $stripe->coupons->create(
            ['duration' => $data['duration'], 'id' => $data['name'], 'percent_off' => $data['discount'], 'max_redemptions' => 20]
        );
        $stripe->promotionCodes->create(
            ['coupon' => $data['name'], 'code' => $data['name']]
        );
        Coupon::query()->firstOrCreate($data);
        redirect('admin.main.index-coupons');
    }
}
