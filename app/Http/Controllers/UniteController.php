<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Models\Unite;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unites = Unite::all();
        return view('admin.unites.index', compact('unites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("salut");
        return view('admin.unites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data=$request->all();
        Unite::create($data);
        return redirect()->route('admin_unites.index')->with('success', 'Unite ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unite $unite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unite $unite)
    {
        //dd($unite);
        return view('admin.unites.edit', compact('unite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unite $unite)
    {
        
        $data=$request->all();
        $unite->update($data);
        return redirect()->route('admin_unites.index')->with('success', 'Unite ajoutée avec succès');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unite $unite)
    {
        $unite->delete();
        return redirect()->route('admin_unites.index')->with('success', 'Unite supprimée avec success');

        
    }
}
