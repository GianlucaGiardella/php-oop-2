<?php
include_once __DIR__ . "/PetProduct.php";

class Leash extends PetProduct
{
    function __construct(
        int $id,
        string $name,
        string $img,
        int $price,
        string $category,
        private string $size, //small, medium, large
        private string $color,
        private string $material,
        private int $length // in mm
    ) {
        parent::__construct($id, $name, $img, $price, $category);
    }
}