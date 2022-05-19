<?php

class Product {
    public $id_product;
    public $name;
    public $description;
    public $price;
    public $image;
    public $user_tk;

    public function __construct($id_product,$name,$description,$price,$image,$user_tk){
        $this->id_product = $id_product;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->user_tk = $user_tk;
    }

    public static function AddProduct($name,$description,$price,$image,$user_tk){
        global $conn;//povezava z bazo
        $name = $conn->real_escape_string($name);
        $description = $conn->real_escape_string($description);
        
        $img = basename("/mnt/rps/".uniqid().'-'.date("Y-m-d").$image['name']);
        move_uploaded_file($image['tmp_name'],"/mnt/rps/".$img);

        $sql1 = "INSERT INTO product (name,description,price,image,user_tk) VALUES ('$name','$description','$price','$img','$user_tk')";
        if($conn->query($sql1)) {
            return true;
        } else {
            return false;
        }
    }
}
?>