<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
