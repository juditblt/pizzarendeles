<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        return view('admin.pizzas', [
            'pizzas' => Pizza::all()
        ]);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $pizza = new Pizza();
        $pizza->name = $request->name;
        $pizza->description = $request->description;
        $pizza->price = $request->price;
        $pizza->quantity = $request->quantity;
        $pizza->save();
        return redirect()->route('admin.pizzas');
    }
}
