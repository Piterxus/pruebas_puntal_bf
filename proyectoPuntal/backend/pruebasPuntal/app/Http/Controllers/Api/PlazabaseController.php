<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PlazaBase;
use Illuminate\Http\Request;

class PlazabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PlazaBase::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PlazaBase $plazasbase)
    {
        return $plazasbase;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlazaBase $plazaBase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlazaBase $plazaBase)
    {
        //
    }
}
