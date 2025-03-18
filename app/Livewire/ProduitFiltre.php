<?php

namespace App\Livewire;

use App\Models\Produit;
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
}
