<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    public function home(){
        return view('private.home', [
            'user' => Auth::user(),
            'pizzas' => Pizza::all()
        ]);
    }

    public function show(){
        return view('private.show', [
            'user' => Auth::user()
        ]);
    }

    public function store(Request $request){
        $order = new Order();
        $order->user_id = Auth::id();
        $order->pizza_id = $request->p_id;
        $order->order_quantity = $request->quantity;
        $order->address = $request->address;
        $order->save();

        return view('private.show', [
            'user' => Auth::user()
        ]);
    }

    public function delete(Request $request){
        $order = Order::find($request->id);
        $order->delete();
        return redirect()->route('private.home');
    }
}
