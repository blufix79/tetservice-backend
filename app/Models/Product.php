<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function interventions()
    {
        return $this->belongsToMany(Intervention::class,'interventions_products');
    }

    public function contracts()
    {
        return $this->belongsToMany(Contract::class,'contracts_products');
    }
}
