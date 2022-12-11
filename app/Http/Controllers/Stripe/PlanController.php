<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{

    public function index()
    {
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $paymentMethods = $request->user()->paymentMethods();
        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("plan", "intent", "paymentMethods"));
    }

    public function subscription(Request $request)
    {
        $paymentMethods = $request->paymentMethod;
        dd($paymentMethods);
        $plan = Plan::find($request->plan);
        $request->user()->newSubscription($request->plan, $plan->stripe_plan)->create($paymentMethods,['id' => $request->user()->id]);

        return view("subscription_success");
    }
}
