<?php

namespace App\Service;

use App\Models\User;
use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Stripe;

class StripeService
{
    public function stripeCharge($request){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
            "amount" => 5 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment Test"
        ]);


        $data = ['subscription' => Carbon::now()->addMonth()];
        User::query()->where('id', '=', auth()->user()->id)->update($data);

    }
}
