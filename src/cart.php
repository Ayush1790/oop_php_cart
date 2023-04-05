<?php
include_once("productData.php");
error_reporting(0);
class cart
{
    public $cart;
    // constructor
    function __construct($cart)
    {
        $this->cart = $cart;
    }
    //function for add cart
    function addToCart($id)
    {
        if (isset($this->cart[$id])) {
            $this->cart[$id]['price'] += $_SESSION['products'][$id]['price'];
            $this->cart[$id]['quantity'] += 1;
        } else {
            $this->cart[$id] = array(
                'name' => $_SESSION['products'][$id]['name'],
                'image' => $_SESSION['products'][$id]['img'],
                'quantity' => 1,
                'price' => $_SESSION['products'][$id]['price']
            );
        }
    }
    // function for remove product
    function removeProduct($id)
    {
        unset($this->cart[$id]);
    }
    // function for decrement quantity
    function decQty($id)
    {
        $this->cart[$id]['price'] -= $_SESSION['products'][$id]['price'];
        $this->cart[$id]['quantity'] -= 1;
        if ($this->cart[$id]['quantity'] == 0)
            unset($this->cart[$id]);
    }
    // function for empty cart
    function empty()
    {
        unset($this->cart);
    }
    // function for gettting value of cart
    function getCart()
    {
        return $this->cart;
    }
}
