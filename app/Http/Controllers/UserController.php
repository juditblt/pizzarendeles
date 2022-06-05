<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    public function delete(Request $request){
        $user = User::find($request->id);
        $user->delete();
        $order = $user->orders();
        $order->delete();
        return redirect()->route('admin.users');
    }
}
