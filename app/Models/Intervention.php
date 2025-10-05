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

    public function products()
    {
        return $this->belongsToMany(Product::class,"interventions_products");
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function repairer()
    {
        return $this->belongsTo(Repairer::class);
    }

    public function timeslots()
    {
        return $this->belongsTo(TimeSlots::class,'slot_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
