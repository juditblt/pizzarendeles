<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('public.index', [
            'pizzas' => Pizza::all(),
        ]);
    }
}
