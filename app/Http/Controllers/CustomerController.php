<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->search)
        {
            return Customer::where(DB::raw("CONCAT(nome,' ',cognome)"),'like','%'.$request->search.'%')->with('city')->get();
        }

        return Customer::with('city')->get();
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
        $customer = new Customer();
        $customer->nome = $request->nome;
        $customer->cognome = $request->cognome;
        $customer->city_id = $request->city_id;
        $customer->indirizzo = $request->indirizzo;
        $customer->telefono = $request->telefono;
        $customer->cellulare = $request->cellulare;
        $customer->created_at = now();
        $customer->updated_at = now();
        $customer->save();
        return $customer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
        return $customer->load(['city','contracts','interventions.products','interventions.repairer','interventions.state']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $customer->nome = $request->nome;
        $customer->cognome = $request->cognome;
        $customer->city_id = $request->city_id;
        $customer->indirizzo = $request->indirizzo;
        $customer->telefono = $request->telefono;
        $customer->cellulare = $request->cellulare;;
        $customer->updated_at = now();
        $customer->save();
        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return $customer;
    }
}
