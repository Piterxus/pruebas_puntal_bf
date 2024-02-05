<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GuardiaCivil;
use Illuminate\Http\Request;

class GuardiacivilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GuardiaCivil::all();
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
    public function show(GuardiaCivil $guardiacivile)
    {
        return $guardiacivile;
    }
    // public function show($id)
    // {
    //     $guardiacivil = GuardiaCivil::find($id);

    //     if ($guardiacivil) {
    //         return response()->json([
    //             'success' => true,
    //             'data' => $guardiacivil->toArray()
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Guardia Civil not found'
    //         ], 500);
    //     }

    // }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuardiaCivil $guardiaCivil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuardiaCivil $guardiaCivil)
    {
        //
    }
}
