<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    //
    public function repairTypes()
    {
        return $this->belongsToMany(RepairType::class,"interventions_repair_types");
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function repairer()
    {
        return $this->belongsTo(Repairer::class);
    }
}
