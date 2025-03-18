<?php

namespace App\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Produit;
use App\Services\CartService;
use Livewire\Component;

class ProduitFiltre extends Component
{
    public $produits;
    public function mount(){
        $this->produits=Produit::whereId(2)->get();
        //dd($this->produits);
    }
    public function render()
    {
        return view('livewire.produit-filtre',['produits'=>$this->produits]);
    }
    public function add_to_cart(){
        //CartService->add('task', TextType::class);
        $this->dispatch('nbr_updated');
    }
}
