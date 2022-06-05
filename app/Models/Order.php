<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    // 1 rendelés 1 userhez tartozik:
    public  function user(){
        return $this->belongsTo(User::class);
    }

    // 1 rendelés 1 pizza:
    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }
}
