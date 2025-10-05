<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlots extends Model
{
    //
    public function interventions()
    {
        return $this->hasMany(Intervention::class,'slot_id');
    }
}
