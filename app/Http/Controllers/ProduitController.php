<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        //dd($produits);
        return view('admin.produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        //dd($data);
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('produits','public');
        }
        Produit::create($data);
        //dd($data);
        return redirect()->route('admin_produits.index')->with('success', 'Produit ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //dd($produit);
        return view('admin.produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image']=$request->file('image')->store('produits','public');
        }
        $produit->update($data);
        return redirect()->route('admin_produits.index')->with('success', 'Produit ajoutée avec succès');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //$produit->delete();
        return redirect()->route('admin_produits.index')->with('success', 'Produit supprimée avec success');

        
    }
}
