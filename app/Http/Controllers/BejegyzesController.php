<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBejegyzesekRequest;
use App\Http\Requests\UpdateBejegyzesekRequest;
use App\Models\Bejegyzes;
use App\Models\Bejegyzesek;

class BejegyzesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $bejegyzesek = Bejegyzes::with('tevekenyseg')->get();
        return response()->json($bejegyzesek);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tevekenyseg_id' => 'required|exists:tevekenysegs,id',
            'osztaly_nev' => 'required|string|max:10',
        ]);

        $bejegyzes = Bejegyzes::create([
            'tevekenyseg_id' => $validated['tevekenyseg_id'],
            'user_id' => $request->user()->id,
            'osztaly_nev' => $validated['osztaly_nev'],
            'allapot' => 'pending',
        ]);

        return response()->json([
            'message' => 'Bejegyzés sikeresen rögzítve, jóváhagyásra vár.',
            'bejegyzes' => $bejegyzes->load('tevekenyseg'),
        ], 201);
    }


    /**
     * Display the specified resource.
     */

    public function show(string $osztaly_id)
    {
        $bejegyzesek = Bejegyzes::where('osztaly_nev', $osztaly_id)
            ->with([
                'tevekenyseg:id,tevekenyseg_nev,pontszam'
            ])
            ->get();

        return response()->json($bejegyzesek);
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
