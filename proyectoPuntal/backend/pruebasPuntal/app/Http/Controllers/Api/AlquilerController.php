<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlquilerResource;
use App\Http\Resources\AlquilerCollection;
use App\Models\Alquiler;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $alquileres = Alquiler::all();
        // return new AlquilerCollection($alquileres);
        return Alquiler::all();
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
    // public function show(Alquiler $alquilere)
    // {
    //     return $alquilere;

    // }
    public function show($plazaBaseID, $embarcacionID)
{
    $alquiler = Alquiler::where('PlazaBaseID', $plazaBaseID)
        ->where('EmbarcacionID', $embarcacionID)
        ->first();

    if (!$alquiler) {
        return response()->json(['message' => 'Alquiler no encontrado'], 404);
    }

    // return $alquiler;
    return new AlquilerResource($alquiler);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alquiler $alquiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alquiler $alquiler)
    {
        //
    }
}
