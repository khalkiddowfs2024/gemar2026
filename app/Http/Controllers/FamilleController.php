<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles = Famille::all();
        //dd($familles);
        return view('admin.familles.index', compact('familles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.familles.create');
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
        Famille::create($data);
        //dd($data);
        return redirect()->route('admin_familles.index')->with('success', 'Famille ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        //dd($famille);
        return view('admin.familles.edit', compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $famille)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('familles','public');
        }
        $famille->update($data);
        return redirect()->route('admin_familles.index')->with('success', 'Famille ajoutée avec succès');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        //$famille->delete();
        return redirect()->route('admin_familles.index')->with('success', 'Famille supprimée avec success');

        
    }
  
}
