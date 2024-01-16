<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sondage;
use Illuminate\Http\Request;

class SondageController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sondage $sondage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sondage $sondage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sondage $sondage)
    {
        // On supprime l'utilisateur
        $sondage->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
