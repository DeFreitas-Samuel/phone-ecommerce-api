<?php

namespace App\Http\Controllers;

use App\Exceptions\PriceMismatchException;
use App\Models\Bill;
use App\Models\BillLine;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Shipment;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Error;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {

        $order = $request->all();
        $totalFromOrder = $order['total'];
        $userIdFromOrder = $order['user_id'];
        $paymentMethod = $order['payment_method'];
        $last4DigitsOfCard = $order['last4DigitsOfCard'];
        $boughtProductsArray = $order['products'];
        $shippingAddress = $order['shipping_address'];

        $paymentMethodUsed = PaymentMethod::where('name', $paymentMethod)->firstOrFail();


        $bill = new Bill();
        $bill->total = $totalFromOrder;
        if(Auth::id() !== $userIdFromOrder){
            return response()->json(['error_message'=> 'The user that is making the request is not the same as the one that is authenticated'],409);
        }
        $user = User::find(Auth::id());
        $bill->user()->associate($user);

        if($paymentMethodUsed->name === 'Debit/Credit Card'){
            $bill->amount_due = 0;
        }
        else{
            $bill->amount_due = $totalFromOrder;
        }
          
        $bill->save();

        foreach ($boughtProductsArray as $product) {
            $billLine = new BillLine();
            $productBought = Product::find($product["product_id"]);
            $calculatedPrice = round(($productBought->price * $product["quantity"]),2);


            $billLine->product()->associate($productBought);

            if($product["totalPrice"] !== $calculatedPrice){
                throw new PriceMismatchException("The price calculated differs from what it was received in the front end");
            }


            $billLine->price = $product["totalPrice"];
            $billLine->quantity = $product["quantity"];
            $billLine->description = $product["name"];
            $billLine->bill()->associate($bill);

            $billLine->save();
        }




        
        if($paymentMethodUsed->name === 'Debit/Credit Card'){
            $payment = new Payment();
            $payment->bill()->associate($bill);
            $payment->user()->associate($user);
            $payment->paymentMethod()->associate($paymentMethodUsed);
            $payment->amount = $totalFromOrder;
            $payment->last_4_digits_of_card = $last4DigitsOfCard;
            $payment->save();
        }


        $shipment = new Shipment();
        $shipment->bill()->associate($bill);
        $shipment->user()->associate($user);
        $shipment->address = $shippingAddress['address'];
        $shipment->city = $shippingAddress['city'];
        $shipment->state = $shippingAddress['state'];
        $shipment->phone_number = $shippingAddress['phoneNumber'];
        $shipment->zipcode = $shippingAddress['zipCode'];
        $shipment->estimated_arrival = Carbon::now()->addDays(7);
        $shipment->delivered = 0;

        $shipment->save();

        $billLines = BillLine::where('bill_id', $bill->id)->get();
      
        return response()->json(['requestAll' => $request->all(),  'bill' => $bill,  'billLine' => $billLine, 'shipment' => $shipment, 'billLines'=>$billLines,
                                'last4DigitsOfCard' => $last4DigitsOfCard, 'paymentMethod' => $paymentMethod],200);

    }
}
