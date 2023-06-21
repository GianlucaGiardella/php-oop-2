<?php
include_once __DIR__ . "/PetProduct.php";

class Food extends PetProduct
{
    function __construct(
        int $id,
        string $name,
        string $img,
        int $price,
        string $category,
        private string $type, //dry, weet or snack
        private string $expiration //data
    ) {
        parent::__construct($id, $name, $img, $price, $category);
    }
}