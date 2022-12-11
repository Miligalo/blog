<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Service\StripeService;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

    public function createCharge()
    {
        return $this->stripeService->stripeCharge();
    }
    public function webhook(){
        return $this->stripeService->webhook();
    }
}
