<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodList extends Model
{
    protected $table = "food_list";

    public function food()
    {
        return $this->belongsTo('App\Product','comida');
    }
}
