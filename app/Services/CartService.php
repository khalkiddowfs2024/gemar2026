<?php

namespace App\Services;


class CartService
{

    private $cart;
    private static $totalQty=0;
    Private static $totalPrice=0;

    // Cart constructor
    public function __construct()
    {
        //self::clearCart();
        //$cart = session()->get('cart', []);
        
    }

    // Add a record to the cart
    public static function add($id,$image, $name, $price, $tva, $quantity)
    {

        $cart = session()->get('cart', []);

        $productId = $id;
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = [ //Adds the cartId as the key to remove/update items
                "id"     => $id,
                "image" => $image,
                "name"   => $name,
                "quantity" => $quantity,
                "price" => $price,
                "tva" => $tva,
            ];
        }
        //dd($cart);
        //Update the array into the Cart session 
        $cartSession = session()->put('cart', $cart);
    }
    public static function getContent()
    {
        //dd(session()->get('cart'));
        return session()->get('cart');
    }
    // Afficher le panier
    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Supprimer un produit du panier
    public static function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        //return redirect()->back()->with('success', 'Produit supprimé du panier');
    }

   

    // Vider le panier
    public static function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Panier vidé');
    }

    // Get the number of items 
    public static function getTotalQty()
    {
        self::updateTotal();

        return self::$totalQty;
       }

    // Get the total price
    public static function getTotalPrice()
    {
        self::updateTotal();
       
        return ( self::$totalPrice);
    }
    public static function isEmpty()
    {
        $cartItems = self::getContent();

        if ($cartItems !== NULL && count($cartItems) > 0) {

            return true;
        }

        return false;
    }
 
     // Calculate the number of items and total price
     public static function updateTotal()
     {
        $totalQty = 0;
        $totalPrice = 0;
        //dd(self::isEmpty());
        if (self::isEmpty()==false){

            foreach (self::getContent() as $record) {
                $totalQty += $record['quantity'];
                $totalPrice += $record['price']*$record['quantity'];
            }
            self::$totalQty = $totalQty;
            self::$totalPrice = round($totalPrice, 2);
        }
     }

    
}
