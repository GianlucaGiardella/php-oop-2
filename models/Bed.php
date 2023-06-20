<?php

class Bed extends PetProduct
{
    function __construct(
        protected string $name,
        protected float $price,
        protected string $category,
        protected string $size, //small, medium, large
        private string $color,
        private string $material
    ) {
    }
}