<?php

class Leash extends PetProduct
{
    function __construct(
        protected string $name,
        protected int $price,
        protected string $category,
        protected string $size, //small, medium, large
        private string $color,
        private string $material,
        private int $length
    ) {
    }
}