<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillLine;
use App\Models\Shipment;
use Illuminate\Http\Response;

class UserOrdersController extends Controller
{
    
    public function show(string $userId): Response
    {
        $response =[];
        $allBillsAssociatedWithUser = Bill::where('user_id',$userId)->orderBy('created_at', 'DESC')->get();
        if($allBillsAssociatedWithUser->isEmpty()){
            return response([],200);
        }
        foreach($allBillsAssociatedWithUser as $bill){
            
            $billLinesAssociatedWithBill = BillLine::where('bill_id', $bill->id)->get();
            $shipmentAssociatedWithBill = Shipment::firstWhere('bill_id', $bill->id);
            $bill->bill_lines = $billLinesAssociatedWithBill; 
            $bill->shipment = $shipmentAssociatedWithBill;

            array_push($response, $bill);
        }

        return response($response,200);
    }
}
