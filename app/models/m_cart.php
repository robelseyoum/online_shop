<?php  


/*

Cart Class

Handle all tasks related to showing or modifying the number of items in cart

The cart keeps tracks of user selected items using a session variable, $_SESSION['cart'].
The session variable holds an array that contains the ids and the number selected of the products in the cart.

$_SESSION['cart']['product_id'] = num of specific item in cart
$_SESSION['cart'][1] = 1 


*/

class Cart 
{
    function __construct(){}


    /*
        Getters and Setters
    */

    /*
        Adds item to the cart
    */

    public function add($id, $num = 1)
    {
        //setup or retrieve cart
        $cart = array();

        if(isset($_SESSION['cart']))
        {
            $cart = $_SESSION['cart'];
        }


        //check to see if item is already in cart

        if(isset($cart[$id]))
        {
            //if item is in cart
            $cart[$id] = $cart[$id] + $num;
        }
        else
        {
            $cart[$id] = $num;
        }

        $_SESSION['cart'] = $cart;
    }


    /*
        Empties all items from cart
    */

    public function empty_cart()
    {
        unset($_SESSION['cart']);
    }





















}