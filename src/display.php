<?php 
include_once 'productData.php';
$str="";
$i=0;
// function for display data
foreach ($data->products as $key => $value) {
    $str.="
    <div id='product-". $value['id']." 'class='product'>
    <img src= ' ". $value['img'] ." '>
    <h3 class='title'><a href='#'>".$value['name']."</a></h3>
    <span>Price: $".$value['price']."</span>
    <a class='add-to-cart' onclick=addCart(".$i++.")>Add To Cart</a>
    </div>";
}
echo $str;
?>