<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $produits=Produit::all();
        return view('shop.shop', compact('produits'));
    }
}
