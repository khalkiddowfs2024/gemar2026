<?php

namespace App\Http\Controllers;

use App\Models\Etat;
use Illuminate\Http\Request;

class EtatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etats = Etat::all();
        return view('admin.etats.index', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.etats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        Etat::create($request->all());
        return redirect()->route('admin_etats.index')->with('success', 'Etat ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etat $etat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etat $etat)
    {
        //dd($etat);
        return view('admin.etats.edit', compact('etat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etat $etat)
    {
        $etat->update($request->all());
        return redirect()->route('admin_etats.index')->with('success', 'Etat ajoutée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etat $etat)
    {
        $etat->delete();
        return redirect()->route('etats.index')->with('success', 'Etat supprimée avec success');

        
    }
}
