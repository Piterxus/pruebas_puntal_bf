<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tripulante;
use Illuminate\Http\Request;

class TripulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tripulante::all();
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
    public function show(Tripulante $tripulante)
    {
        return $tripulante;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tripulante $tripulante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tripulante $tripulante)
    {
        //
    }
}
