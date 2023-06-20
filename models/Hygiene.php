<?php

class Health extends PetProduct
{
    function __construct(
        protected string $name,
        protected int $price,
        protected string $category,
        private string $size, //small, medium, large
        private string $color,
        private string $material
    ) {
    }
}