<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesList extends Model
{
    protected $table = "services_list";

    public function services()
    {
        return $this->belongsTo('App\Service','servicio');
    }
}