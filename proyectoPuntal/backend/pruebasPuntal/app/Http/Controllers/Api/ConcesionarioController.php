<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Concesionario;
use Illuminate\Http\Request;

class ConcesionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Concesionario::all();
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
    public function show(Concesionario $concesionario)
    {
        return $concesionario;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concesionario $concesionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concesionario $concesionario)
    {
        //
    }
}
