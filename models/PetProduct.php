<?php

class PetProduct
{
    function __construct(
        protected string $name,
        protected float $price,
        protected string $category //dog or cat
    ) {
    }
}