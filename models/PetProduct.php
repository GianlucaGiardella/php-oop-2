<?php
include_once __DIR__ . "/PetProduct.php";

class PetProduct
{
    function __construct(
        protected int $id,
        protected string $name,
        protected string $img,
        protected int $price, //cent
        protected string $category //dog or cat
    ) {
    }
}