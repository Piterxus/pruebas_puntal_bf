<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guardamuelle;
use Illuminate\Http\Request;

class GuardamuelleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Guardamuelle::all();
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
    public function show(Guardamuelle $guardamuelle)
    {
        return $guardamuelle;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guardamuelle $guardamuelle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guardamuelle $guardamuelle)
    {
        //
    }
}
