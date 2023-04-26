<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkOut(Request $req){
        $carts = Cart::all();
        $order = new Order;
        foreach ($carts as $key => $cart) {
            // print_r($memeber);
            
            $order->save([
                $order->user_id = session('LoggedUser'),
                $order->grand_total = trim($req->grand_total, '$'),
                $order->status = "Pending",
                $order->delivery_date = now()
            ]);
            // $band->bandMemebers()->update($data);
        }
        Cart::truncate();
        return redirect('home');

    }

}
