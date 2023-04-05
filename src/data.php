<?php
session_start();
// data
$products=array(
    "0"=>array('id'=>101,'name'=>"football",'img'=>"./images/football.png",'price'=>150,'qty'=>0),
    "1"=>array('id'=>102,'name'=>"tennis",'img'=>"./images/tennis.png",'price'=>120,'qty'=>0),
    "2"=>array('id'=>103,'name'=>"basketball",'img'=>"./images/basketball.png",'price'=>90,'qty'=>0),
    "3"=>array('id'=>104,'name'=>"table-tennis",'img'=>"./images/table-tennis.png",'price'=>110,'qty'=>0),
    "4"=>array('id'=>105,'name'=>"soccer",'img'=>"./images/soccer.png",'price'=>80,'qty'=>0),
);
if(!isset($_SESSION['products'])){
    $_SESSION['products']=$products;
}
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
