<?php

namespace App\Http\Controllers;

use App\Models\RepairType;
use Illuminate\Http\Request;

class RepairTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return RepairType::all();
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
        $repairtype = new RepairType();
        $repairtype->nome = $request->nome;
        $repairtype->created_at = now();
        $repairtype->updated_at = now();
        $repairtype->save();
        return $repairtype;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepairType  $repairtype
     * @return \Illuminate\Http\Response
     */
    public function show(RepairType $repairtype)
    {
        //
        $repairtype;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RepairType  $repairtype
     * @return \Illuminate\Http\Response
     */
    public function edit(RepairType $repairtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RepairType  $repairtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepairType $repairtype)
    {
        //
        $repairtype->nome = $request->nome;
        $repairtype->updated_at = now();
        $repairtype->save();
        return $repairtype;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RepairType  $repairtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepairType $repairtype)
    {
        //
        $repairtype->delete();
        return $repairtype;
    }
}
