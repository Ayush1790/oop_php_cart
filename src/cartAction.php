<?php
include_once("cart.php");
$objCart = new cart($_SESSION['cart']);
// switch case for multiple actions
switch ($_POST['action']) {
    case "removeProduct":
        $objCart->removeProduct($_POST['id']);
        break;
    case "addToCart":
        $objCart->addToCart($_POST['id']);
        break;
    case "decQty":
        $objCart->decQty($_POST['id']);
        break;
    case "empty":
        $objCart->empty();
        break;
}
// getting data from object
$cartNew = $objCart->getCart();
$_SESSION['cart'] = $cartNew;
display();
// function for display data
function display()
{
    $str = "";
    $i = 0;
    $total = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productKey => $productValue) {
            $str .= "<tr><td><img src='" . $_SESSION['cart'][$productKey]['image'] . "'></td><td>" . $_SESSION['cart'][$productKey]['name'] .
                "</td><td><button onclick=dec_qty(this.id) id='" . $productKey . "'>-</button>" . $_SESSION['cart'][$productKey]['quantity'] . "<button onclick=addCart(this.id) id='" . $productKey . "'>+</button></td><td>" . $_SESSION['cart'][$productKey]['price'] .
                "</td><td><button class='remove' value='Remove' onclick=removeProduct(this.id) id='" . $productKey . "'>Remove</button>
                </td></tr>";
            $total += $_SESSION['cart'][$productKey]['price'] * 1;
            $i++;
        }
        if ($total > 0) {
            $str .= "<tr><td colspan=2><h1>Total Amount</h1></td><td colspan=2><h1>" . $total . "</h1></td><td><button onclick=emptyCart()>Empty Cart</button></tr>";
        }
        echo $str;
    }
}
