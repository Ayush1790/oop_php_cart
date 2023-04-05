<?php
require_once 'data.php';
class Product{
    public $products;
    function __construct($value){
        $this->products=$value;
    }
    function getData(){
        return $this->products;
    }
}
$data=new Product($_SESSION['products']);
?>