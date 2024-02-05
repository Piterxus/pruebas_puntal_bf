<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transito;
use Illuminate\Http\Request;

class TransitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Transito::all();
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
    public function show(Transito $transito)
    {
        return $transito;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transito $transito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transito $transito)
    {
        //
    }
}
