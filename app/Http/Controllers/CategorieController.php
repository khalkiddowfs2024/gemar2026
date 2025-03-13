<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $categorie = new Categorie();
        //dd($request->input('categorie'));
        $categorie->categorie = $request->input('categorie');
        if($request->hasFile('image')){
            $categorie->image=$request->file('image')->store('categories','public');
        }
        $categorie->save();
        return redirect()->route('admin_categories.index')->with('success', 'Categorie ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //dd($categorie);
        return view('admin.categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        
        //dd($request->input('categorie'));
        $categorie->categorie = $request->input('categorie');
        if($request->hasFile('image')){
            $categorie->image=$request->file('image')->store('categories','public');
        }
        $categorie->update();
        return redirect()->route('admin_categories.index')->with('success', 'Categorie ajoutée avec succès');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index')->with('success', 'Categorie supprimée avec success');

        
    }
}
