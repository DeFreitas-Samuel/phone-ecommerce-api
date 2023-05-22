<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillLine;
use App\Models\Payment;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use Error;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {

        // $order = $request->all();
        // $totalFromOrder = $order['total'];
        // $userIdFromOrder = $request['user_id'];
        // $productIdFromOrder = $request['product_id'];


        // $bill = new Bill();
        // $bill->total = $totalFromOrder;
        // if(Auth::id() !== $userIdFromOrder){
        //     return response()->json(['error_message'=> 'The user that is making the request is not the same as the one that is authenticated'],409);
        // }
        // $user = User::find(Auth::id());
        // $bill->user()->associate($user);
        // $bill->amount_due = 0;  
        // $bill->save();

        // $billLine = new BillLine();
        // $productBought = Product::find($productIdFromOrder);
        // $billLine->product()->associate($productBought);
        // $billLine->price = $productBought->price;
        // $billLine->quantity = 1;
        // $billLine->bill()->associate($bill);
        // $billLine->save();


        // $paymentMethod = PaymentMethod::find(1);
        // $payment = new Payment();
        // $payment->bill()->associate($bill);
        // $payment->user()->associate($user);
        // $payment->paymentMethod()->associate($paymentMethod);
        // $payment->amount = $totalFromOrder;

        // $payment->save();


        // return response()->json(['bill' => $bill,  'billLine' => $billLine],200);
        return response()->json(['requestAll' => $request->all(),  'request' => $request],200);

    }
}
