<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Service\StripeService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Psy\CodeCleaner\UseStatementPass;
use Stripe\Charge;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function __construct(private StripeService $stripeService)
    {

    }

    public function index()
    {
        return view('stripe.show');
    }

    public function createCharge(Request $request)
    {
        $this->stripeService->stripeCharge($request);
        return redirect('stripe')->with('success', 'Payment Successful!');
    }
}
