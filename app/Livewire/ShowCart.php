<?php

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Component;

class ShowCart extends Component
{


    public function render()
    {
        return view('livewire.show-cart');
    }

    public function increment($id){

        $cart = session()->get('cart', []);
        $cart[$id]['quantity']=9999;
        session()->put('cart', $cart);
        //$this->dispatch('nbr_updated', count(CartService::getContent()));

    }
}
