<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function provedor (){
        return $this->belongsTo('App\Models\Supplier');
    }

    public function costumers (){
        return $this->belongsToMany('App\Models\Custmer');
    }
    
}
