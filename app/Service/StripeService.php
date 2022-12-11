<?php

namespace App\Service;

use App\Models\User;
use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Subscription;
class StripeService
{
    public function stripeCharge(){
        try {
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $session = \Stripe\Checkout\Session::create([
                'line_items' => [[
                    'price' => 'price_1MDEChG5OSCRQdIzr4670arQ',
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => 'http://localhost:47000/',
                'cancel_url' => 'http://localhost:47000/',
                'client_reference_id' => auth()->user()->id,
            ]);
            return redirect($session->url);
        } catch (\Throwable $e) {
            dd($e->getMessage());
        }
    }

    public function webhook(){
        $endpoint_secret = 'whsec_c32c3a9c6eac6ab54ecc300b2574b508dd8597eaa7e12956107c1b38a9b64d91';

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit();
        }
//        Log::error(json_encode($event->data->object->id));
        if($event->type != 'checkout.session.completed'){
            return \response()->json();
        }
        $data = ['subscription' => Carbon::now()->addMonth()];
        User::query()->where('id', '=', $event->data->object->client_reference_id)->update($data);
        http_response_code(200);
    }
}
