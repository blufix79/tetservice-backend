<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use App\Models\TimeSlots;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SebastianBergmann\Timer\Timer;

class TimeSlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->repairerId && $request->date){
            $slots = TimeSlots::all();
            $date = Carbon::parse($request->date);

            $interventions = Intervention::all()->where('data','=',$request->date)->where('repairer_id','=',$request->repairerId);

            foreach ($slots as $key => $slot) {
                $slots[$key]->available = true;
                foreach ($interventions as $k => $intervention) {
                    if($slots[$key]->id == $intervention->slot_id){
                        $slots[$key]->available = false; // Imposta a false solo se c'è una corrispondenza
                        // $slots[$key]->with(["interventons" => function($q) use (&$requst){
                        //     $q->where('interventions.data', '=', $request->date);
                        // }]);
                        $i = Intervention::with('customer.city')->where('data','=',$request->date)
                        ->where('repairer_id','=',$request->repairerId)
                        ->where('slot_id','=',$slots[$key]->id)
                        ->get();
                        $slots[$key]->intervention = $i[0];
                    }
                }
            }

            return $slots;
        }
        else{
            return TimeSlots::all();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timeSlot = new TimeSlots();
        $timeSlot->start = $request->start;
        $timeSlot->end = $request->end;
        $timeSlot->created_at = now();
        $timeSlot->updated_at = now();
        $timeSlot->save();
        return $timeSlot;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeSlots  $timeSlots
     * @return \Illuminate\Http\Response
     */
    public function show(TimeSlots $timeSlots)
    {
        return $timeSlots;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeSlots  $timeSlots
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeSlots $timeSlots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeSlots  $timeSlots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeSlots $timeSlots)
    {
        $timeSlots->start = $request->start;
        $timeSlots->end = $request->end;
        $timeSlots->updated_at = now();
        return $timeSlots;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeSlots  $timeSlots
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeSlots $timeSlots)
    {
        $timeSlots->delete();
        return $timeSlots;
    }
}
