<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Instalacion;
use Illuminate\Http\Request;

class InstalacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Instalacion::all();
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
    public function show(Instalacion $instalacione)
    {
        return $instalacione;
    }

    // public function show($id)
    // {
    //     $instalacion = Instalacion::find($id);

    //     if (!$instalacion) {
    //         return response()->json(['message' => 'Instalacion no encontrada'], 404);
    //     }

    //     return $instalacion;
    // }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instalacion $instalacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instalacion $instalacion)
    {
        //
    }
}
