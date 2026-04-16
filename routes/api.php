<?php

use App\Http\Controllers\BejegyzesController;
use App\Http\Controllers\BejegyzesekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/bejegyzesek', [BejegyzesController::class, 'index']);
    Route::get('/bejegyzesek/{osztaly_id}', [BejegyzesController::class, 'show']);
    Route::post('/bejegyzes', [BejegyzesController::class, 'store']);
});

/*
GET	 all 	/bejegyzesek	Visszaadja az összes bejegyzést a tevékenység nevével és pontszámával együtt
GET 	osztaly_id 	/bejegyzesek/osztaly_id	Visszaadja egy adott osztály összes bejegyzését a tevékenység nevével és pontszámával együtt
POST	/bejegyzes	Új bejegyzést rögzíthetünk a táblában

*/

