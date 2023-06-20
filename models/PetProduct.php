<?php

class PetProduct
{
    function __construct(
        protected string $name,
        protected int $price,
        protected string $category //dog or cat
    ) {
    }
}