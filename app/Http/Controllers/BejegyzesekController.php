<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBejegyzesekRequest;
use App\Http\Requests\UpdateBejegyzesekRequest;
use App\Models\Bejegyzesek;

class BejegyzesekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBejegyzesekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bejegyzesek $bejegyzesek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBejegyzesekRequest $request, Bejegyzesek $bejegyzesek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bejegyzesek $bejegyzesek)
    {
        //
    }
}
