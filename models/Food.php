<?php

class Food extends PetProduct
{
    function __construct(
        protected string $name,
        protected float $price,
        protected string $category,
        private string $type, //dry, weet or snack
        private string $expiration //data
    ) {
    }
}