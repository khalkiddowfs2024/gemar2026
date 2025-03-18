<?php
namespace App\Services;
class ItemCartService{
    protected $id;
    protected $name;
    protected $price;
    protected $quantity;


    public function __construct($id, $name, $price=0, $quantity=1)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;        
    }
    

    public function direBonjour( $name){
        return "Bonjour".$name;
    }

}
?>