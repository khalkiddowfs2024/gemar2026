<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    public $nbr;
    public function mount(){
        $this->nbr =7;
    }
    public function render()
    {
        return view('livewire.cart');
    }
    #[On('nbr_updated')]
    public function update_nbr(){
        $this->nbr++;
    }
}
