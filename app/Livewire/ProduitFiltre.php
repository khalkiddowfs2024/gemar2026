<?php

namespace App\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Produit;
use App\Services\CartService;
use Livewire\Component;

class ProduitFiltre extends Component
{
    public $produits;
    public function mount()
    {
        $this->produits = Produit::whereId(2)->get();
        $this->produits = Produit::all();
        //CartService::clearCart();
        // if (CartService::isEmpty())
        //     $this->dispatch('nbr_updated', count(CartService::getContent()));
        // else
        //     $this->dispatch('nbr_updated', 0);
    }
    public function render()
    {
        return view('livewire.produit-filtre', ['produits' => $this->produits]);
    }
    public function add_to_cart(Produit $produit)
    {
        CartService::add($produit->id,$produit->image, $produit->designation, $produit->prix_ht, $produit->tva, 1);
        $this->dispatch('nbr_updated', count(CartService::getContent()));
    }
    public function remove_from_cart(Produit $produit)
    {
        CartService::removeFromCart($produit->id);
        $this->dispatch('nbr_updated', count(CartService::getContent()));
        }
}
