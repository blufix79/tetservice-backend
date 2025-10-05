<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Intervention;
use DateTime;
use Illuminate\Http\Request;

class ContractController extends Controller
{

    public function __construct() {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($customer_id = null, Request $request)
    {
        //
        $contracts = Contract::with(['customer.city','products']);

        switch ($request->filter) {
            case 'expiring':
                $from = date('Y-m-d');

                $to = date('Y-m-d',strtotime($from.'+'.$request->value.'days'));

                $contracts = $contracts->whereBetween('scadenza',[$from,$to])->orderBy('scadenza','asc');
                break;
        }

        if($customer_id)
        {
            return $contracts->where('customer_id',$customer_id)->get();
        }

        return $contracts->get();
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
        $contract = new Contract();
        $contract->data = $request->data;
        $contract->descrizione = $request->descrizione;
        $contract->customer_id = $request->customer_id;
        $contract->scadenza = $request->scadenza;
        $contract->attivo = $request->attivo;
        $contract->created_at = now();
        $contract->updated_at = now();
        $contract->save();
        $contract->products()->attach($request->products);

        $data = new DateTime($contract->data);
        $scadenza = new DateTime($contract->scadenza);

        $interval = $data->diff($scadenza);

        $numInterventions = $interval->y;

        for ($i=0; $i < $numInterventions; $i++) {
            $intervention = new Intervention();
            $intervention->titolo = "Intervento per contratto n. ".$contract->id;
            $intervention->descrizione = "Contratto del ".$contract->data;
            $intervention->note = "";

            $str = '+'.($i+1).'year';
            if($i>0){
                $str = '+'.($i+1).'years';
            }

            $intData = date('Y-m-d',strtotime($contract->data.$str));
            $intData = date('Y-m-d',strtotime($intData.'-10days'));

            $intervention->data = $intData;
            $intervention->repairer_id = 1;
            $intervention->customer_id = $contract->customer_id;
            $intervention->contract_id = $contract->id;
            $intervention->state_id = 3;
            $intervention->created_at = now();
            $intervention->updated_at = now();
            $intervention->garanzia = false;
            $intervention->save();
            $repairTypes[] = 3;
            $intervention->repairTypes()->attach($repairTypes);
            $intervention->products()->attach($request->products);
        }

        return $contract;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
        return $contract->load(['customer.city','products']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //$modifyInterventions = false;
        //if($request->data !== $contract->data || $request->scadenza !== $contract->data) {

        //}

        //
        $contract->data = $request->data;
        $contract->descrizione = $request->descrizione;
        $contract->customer_id = $request->customer_id;
        $contract->scadenza = $request->scadenza;
        $contract->attivo = $request->attivo;
        $contract->created_at = now();
        $contract->updated_at = now();
        $contract->save();
        $contract->products()->sync($request->products);

        //todo modify interventions


        return $contract;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        //
        $contract->delete();
        return $contract;
    }
}
