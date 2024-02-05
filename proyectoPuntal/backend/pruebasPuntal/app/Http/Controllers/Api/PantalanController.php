<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pantalan;
use Illuminate\Http\Request;

class PantalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pantalan::all();
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
    public function show(Pantalan $pantalane)
    {
        return $pantalane;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pantalan $pantalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pantalan $pantalan)
    {
        //
    }
}
