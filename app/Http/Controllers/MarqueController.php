<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = Marque::all();
        return view('admin.marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.marques.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('familles','public');
        }
        Marque::create($data);
        return redirect()->route('admin_marques.index')->with('success', 'Marque ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marque $marque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marque $marque)
    {
        //dd($marque);
        return view('admin.marques.edit', compact('marque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marque $marque)
    {
        
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('familles','public');
        }
        $marque->update($data);
        return redirect()->route('admin_marques.index')->with('success', 'Marque ajoutée avec succès');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();
        return redirect()->route('marques.index')->with('success', 'Marque supprimée avec success');

        
    }
}
