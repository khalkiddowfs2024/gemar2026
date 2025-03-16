<?php

namespace App\Http\Controllers;

use App\Models\SousFamille;
use Illuminate\Http\Request;

class SousFamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sous_familles = SousFamille::all();
        //dd($sous_familles);
        return view('admin.sous_familles.index', compact('sous_familles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.sous_familles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('sous_familles','public');
        }
        SousFamille::create($data);
        //dd($data);
        return redirect()->route('admin_sous_familles.index')->with('success', 'Sous_famille ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(SousFamille $sous_famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SousFamille $sous_famille)
    {
        //dd($sous_famille);
        return view('admin.sous_familles.edit', compact('sous_famille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SousFamille $sous_famille)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('sous_familles','public');
        }
        $sous_famille->update($data);
        return redirect()->route('admin_sous_familles.index')->with('success', 'Sous_famille ajoutée avec succès');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SousFamille $sous_famille)
    {
        //$sous_famille->delete();
        return redirect()->route('admin_sous_familles.index')->with('success', 'Sous_famille supprimée avec success');

        
    }
}
