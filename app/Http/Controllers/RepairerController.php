<?php

namespace App\Http\Controllers;

use App\Models\Repairer;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use stdClass;

class RepairerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $repairers = Repairer::with('interventions');
        return $repairers->get();
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
        $repairer = new Repairer();
        $repairer->nome = $request->get('nome');
        $repairer->cognome = $request->get('cognome');
        $repairer->created_at = now();
        $repairer->updated_at = now();
        $repairer->save();
        return $repairer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repairer  $repairer
     * @return \Illuminate\Http\Response
     */
    public function show(Repairer $repairer, Request $request)
    {
        //
        switch ($request->filter) {
            case 'dateIntervention':
               $data = date('Y-m-d 00:00:00',strtotime($request->value));

                $callBack = function($query) use($data){
                    $query->where('data','=',$data);
                };

                return $repairer->whereHas('interventions',$callBack)->with(['interventions.customer'])->get();
                break;
        }

        return $repairer->load('interventions');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repairer  $repairer
     * @return \Illuminate\Http\Response
     */
    public function edit(Repairer $repairer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repairer  $repairer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repairer $repairer)
    {
        //
        $repairer->nome = $request->nome;
        $repairer->cognome = $request->cognome;
        $repairer->updated_at = now();
        $repairer->save();
        return $repairer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repairer  $repairer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repairer $repairer)
    {
        //
        $repairer->delete();
        return $repairer;
    }
}
