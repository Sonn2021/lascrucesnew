<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $table = "hours";
    protected $dates = ['name_field'];
}
