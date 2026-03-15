<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutus()
    {
        return view('frontend.about-us');
    }

    public function myaccount()
    {
        return view('frontend.my-account');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function checkoutpage()
    {
        $userId = auth()->id() ?? 0;

        $cartItems = \App\Models\frontend\CartItem::with('project')
            ->where('user_id', $userId)
            ->get();

        $subTotal = $cartItems->sum(function ($item) {
            $price = floatval($item->project->price ?? 0);
            $quantity = intval($item->quantity ?? 1);
            return $price * $quantity;
        });

        $billingInfo = \App\Models\BillingInfo::where('user_id', auth()->id() ?? null)->first();

        return view('frontend.checkout-page', compact('cartItems', 'subTotal', 'billingInfo'));
    }

    public function storeBilling(\Illuminate\Http\Request $request)
    {
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name'  => 'nullable|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:50',
            'address_line1' => 'required|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'city'       => 'required|string|max:255',
            'state'      => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:50',
            'country'    => 'required|string|max:255',
            'notes'      => 'nullable|string',
            'payment_method' => 'nullable|string|max:50',
        ];

        $data = $request->validate($rules);

        $userId = auth()->id() ?: null;

        $billing = \App\Models\BillingInfo::updateOrCreate(
            ['user_id' => $userId],
            array_merge($data, ['user_id' => $userId])
        );

        // Store selected payment method in session (can be used by payment step)
        if ($request->filled('payment_method')) {
            session(['payment_method' => $request->input('payment_method')]);
        }

        return redirect()->route('checkoutpage')->with('success', 'Order placed successfully.');
    }
}
