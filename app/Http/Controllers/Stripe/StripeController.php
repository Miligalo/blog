<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Psy\CodeCleaner\UseStatementPass;
use Stripe\Charge;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view('stripe.show');
    }

    public function createCharge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
            "amount" => 5 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment Test"
        ]);

        $data = ['subscription' => 'vip'];
        User::query()->where('id', '=', auth()->user()->id)->update($data);
        return redirect('stripe')->with('success', 'Payment Successful!');
    }
}
