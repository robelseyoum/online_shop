<?php 

require_once 'app/init.php'; 

$Template->set_data('page_class', 'shoppingcart');

if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    //check if adding a valid item 
    if(! $Products->product_exists($_GET['id']))
    {
        $Template->set_alert('Invalid item!');
        $Template->redirect(SITE_PATH.'cart.php');
    }


    //add item to cart
    if(isset($_GET['num']) && is_numeric($_GET['num']))
    {
        $Cart->add($_GET['id'], $_GET['num']);
        $Template->set_alert('Items have been added to the cart');
    }  
    else
    {
        $Cart->add($_GET['id']);
        $Template->set_alert('Items has been added to the cart');
    }

    /*echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";*/

    //after the item added to the cart it refresh the pate
    $Template->redirect(SITE_PATH.'cart.php');
}

if(isset($_GET['empty']))
{
    $Cart->empty_cart();
    $Template->set_alert('Shopping cart emptied!');
    $Template->redirect(SITE_PATH.'cart.php');
}

//get items in cart
$display = $Cart->create_cart();
$Template->set_data('cart_rows', $display);

//get category nav
$category_nav = $Categories->create_category_nav();
$Template->set_data('page_nav', $category_nav);

$Template->load('app/views/v_public_cart.php', 'Shoping Cart'); 