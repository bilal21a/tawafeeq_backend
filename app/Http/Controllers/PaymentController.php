<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment_form');
    }

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $intent = PaymentIntent::create([
            'amount' => 2000, // Amount in cents
            'currency' => 'usd',
        ]);

        return $intent;
    }
    public function createCheckoutSession(Request $request, $plan_id)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $plan = Plan::find($plan_id);
        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'aed',
                    'product_data' => [
                        'name' => $plan->name,
                    ],
                    'unit_amount' => $plan->amount * 100, // Amount in cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['plan' => $plan->id]),
            'cancel_url' => url('/cancel'),
        ]);

        return response()->json(['id' => $checkout_session->id]);
    }
    public function success(Request $request)
    {
        $payments = new Payment();
        $payments->plan_id = $request->plan;
        $payments->user_id = auth()->id();
        $payments->save();
        $plan = Plan::find($request->plan);
        $currentDate = Carbon::now();
        $newDate = $currentDate->addDays($plan->days);
        $user = User::find(auth()->id());
        $user->exipred_at = $newDate;
        $user->save();

        return redirect()->route('home')->with('payment_success','payment done');
    }
    public function cancel(Request $request)
    {
        return redirect()->route('plans');
    }
}
