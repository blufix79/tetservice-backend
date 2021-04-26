<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function interventions()
    {
        return $this->hasMany('App\Intervention');
    }
}
