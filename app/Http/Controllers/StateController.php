<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return State::all();
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
        $state = new State();
        $state->nome = $request->nome;
        $state->created_at = now();
        $state->updated_at = now();
        $state->save();
        return $state;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\States  $states
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
        return $state;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\States  $states
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\States  $states
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //
        $state->nome = $request->nome;
        $state->created_at = now();
        $state->updated_at = now();
        $state->save();
        return $state;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\States  $states
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
        $state->delete();
        return $state;
    }
}
