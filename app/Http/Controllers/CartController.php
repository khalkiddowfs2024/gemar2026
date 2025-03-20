<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
   // Ajouter un produit au panier
   public function add_to_cart(Request $request)
   {
       $cart = session()->get('cart', []);

       $productId = $request->id;
       if (isset($cart[$productId])) {
           $cart[$productId]['quantity'] += 1;
       } else {
           $cart[$productId] = [
               'name' => $request->designation,
               'price' => $request->prix_ht,
               'quantity' => 1
           ];
       }

       session()->put('cart', $cart);
       return response()->json(['message' => 'Produit ajouté au panier', 'cart' => $cart]);
   }

   // Afficher le panier
   public function show_cart()
   {
       $cart = session()->get('cart', []);
       
       return view('shop.show_cart', compact('cart'));
   }

   // Supprimer un produit du panier
   public function remove_from_cart($id)
   {
       $cart = session()->get('cart', []);

       if (isset($cart[$id])) {
           unset($cart[$id]);
           session()->put('cart', $cart);
       }

       return redirect()->back()->with('success', 'Produit supprimé du panier');
   }

   // Vider le panier
   public function clear_cart()
   {
       session()->forget('cart');
       return redirect()->back()->with('success', 'Panier vidé');
   }
   
}
