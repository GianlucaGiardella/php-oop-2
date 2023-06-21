<?php
include_once __DIR__ . "/PetProduct.php";

class PetProduct
{
    function __construct(
        protected int $id,
        protected string $name,
        protected string $img,
        protected int $price,
        protected string $category,
        protected string $size
    ) {
    }

    function get_formatted_price()
    {
        return $this->price / 100 . " €";
    }

    // function get_formatted_size()
    // {
    //     return "Taglia: " . $this->size;
    // }
}