<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Intervention::all();
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
        $intervention->product_id = $request->product_id;
        $intervention->state_id = $request->state_id;
        $intervention->created_at = now();
        $intervention->updated_at = now();
        $intervention->save();
        $intervention->repairTypes()->attach($request->repair_type_id);
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
        return $intervention->with(['product','customer','repairer','repairTypes'])->get();
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
        $intervention->product_id = $request->product_id;
        $intervention->state_id = $request->state_id;
        $intervention->created_at = now();
        $intervention->updated_at = now();
        $intervention->save();
        $intervention->repairTypes()->attach($request->repair_type_id);
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
