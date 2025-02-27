<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function orders() {
        return $this->belongsToMany('App\Order')->withPivot('product_id', 'quantity');
    }

}
