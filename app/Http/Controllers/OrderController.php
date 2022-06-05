<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('admin.orders', [
            'orders' => Order::all()
        ]);
    }

    public function done(Request $request){
        $order = Order::find($request->id);
        $order->approval = 'done';
        $order->save();
        return redirect()->route('admin.orders');
    }
}
