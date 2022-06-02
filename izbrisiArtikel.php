<?php 
include 'views/head.php';
include 'glava.php';
include_once 'classes/product.php';
$err = "";

function deleteAdd($id){
    if($product = Product::DeleteProduct($id)) {
        header('location: index.php');
    } else {
        $err = "Nemorem izbrisati artikla!";
    }
}

$id = $_GET["id"];
deleteAdd($id);
echo $err;
?>