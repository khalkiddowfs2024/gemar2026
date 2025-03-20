<?php

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    public $nbr;
    public function mount(){
        if(CartService::isEmpty()==false)
            $this->nbr = 0;
        else
            $this->nbr =count(CartService::getContent());
    }
    public function render()
    {
        return view('livewire.cart');
    }
    #[On('nbr_updated')]
    public function update_nbr($nbr){
        $this->nbr=$nbr;
    }
    public function remove_from_cart(int $produit)
    {
        CartService::removeFromCart($produit);
        $this->dispatch('nbr_updated', count(CartService::getContent()));
        }
}
