<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class InterventionController extends Controller
{
    /**
     * Create a new InterventionController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($repairer_id = null, Request $request)
    {
        //
        $interventions = Intervention::with(['products', 'repairTypes', 'repairer', 'customer.city', 'state']);

        switch ($request->filter) {
            case 'lastDays':
                $from = date('Y-m-d');

                $to = date('Y-m-d', strtotime($from . '+' . $request->to . 'days'));

                $order = 'asc';
                if ($request->orderDirection) {
                    $order = $request->orderDirection;
                }

                $interventions = $interventions->whereBetween('data', [$from, $to])->orderBy('data', $order);
                break;
            case 'rangeDate':
                $order = $request->orderDirection ?? 'asc';
                if ($request->from && $request->to) {
                    $interventions = $interventions
                        ->whereBetween('data', [$request->from, $request->to])
                        ->orderBy('data', $order);
                }
                break;
            case 'status':
                $from = date('Y-m-d');

                $to = date('Y-m-d', strtotime($from . '+' . 30 . 'days'));
                $order = 'asc';

                if ($request->orderDirection) {
                    $order = $request->orderDirection;
                }
                $interventions = $interventions->where('state_id', $request->value)->whereBetween('data', [$from, $to])->orderBy('data', $order);
                break;
            case 'repairerDay':
                $data = date('Y-m-d 00:00:00', strtotime($request->value));

                $interventions->where('repairer_id', $request->repairer_id)
                    ->where('data', '=', $data)
                    ->join('time_slots', 'interventions.slot_id', '=', 'time_slots.id')
                    ->orderBy('time_slots.start', 'asc')
                    ->select('interventions.*') // Per evitare di sovrascrivere i campi con quelli di timeslots
                    ->with(['timeslots']);
                break;
        }

        if ($repairer_id) {
            return $interventions->where('repairer_id', $repairer_id)->get();
        }

        if ($request->orderField && $request->orderDirection) {
            $interventions = $interventions->orderBy($request->orderField, $request->orderDirection);
        }

        return $interventions->get();
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
        //
        $intervention = new Intervention();
        $intervention->titolo = $request->titolo;
        $intervention->descrizione = $request->descrizione;
        $intervention->note = $request->note;
        $intervention->data = $request->data;
        $intervention->repairer_id = $request->repairer_id;
        $intervention->customer_id = $request->customer_id;
        $intervention->state_id = $request->state_id;
        $intervention->slot_id = $request->slot_id;
        $intervention->created_at = now();
        $intervention->updated_at = now();
        $intervention->garanzia = $request->garanzia;
        $intervention->save();
        $intervention->repairTypes()->attach($request->repairTypes);
        $intervention->products()->attach($request->products);
        return $intervention;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function show(Intervention $intervention)
    {
        //
        //return $intervention->with('product')->with('customer')->with('repairTypes')->get();
        return $intervention->load(['products', 'customer.city', 'repairer', 'repairTypes', 'contract', 'timeslots']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function edit(Intervention $intervention)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intervention $intervention)
    {
        //
        $intervention->titolo = $request->titolo;
        $intervention->descrizione = $request->descrizione;
        $intervention->note = $request->note;
        $intervention->data = $request->data;
        $intervention->repairer_id = $request->repairer_id;
        $intervention->customer_id = $request->customer_id;
        $intervention->state_id = $request->state_id;
        $intervention->slot_id = $request->state_id === 4 ? null : $request->slot_id;
        $intervention->created_at = now();
        $intervention->updated_at = now();
        $intervention->garanzia = $request->garanzia;
        $intervention->save();
        $intervention->repairTypes()->sync($request->repairTypes);
        $intervention->products()->sync($request->products);
        return $intervention;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intervention  $intervention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intervention $intervention)
    {
        //
        $intervention->delete();
        return $intervention;
    }
}
