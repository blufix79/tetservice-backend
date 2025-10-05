<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RepairType extends Model
{
    //
    public function interventions()
    {
        return $this->belongsToMany(Intervention::class);
    }
}
