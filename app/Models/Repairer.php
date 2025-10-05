<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repairer extends Model
{

    public function interventions()
    {
        return $this->hasMany(Intervention::class);
    }
}
