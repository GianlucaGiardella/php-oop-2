<?php
include_once __DIR__ . "/PetProduct.php";

class PetPorter extends PetProduct
{
    function __construct(
        int $id,
        string $name,
        string $img,
        int $price,
        string $category,
        string $size,
        private string $color,
        private string $material
    ) {
        parent::__construct($id, $name, $img, $price, $category, $size);
    }

    function showProduct()
    {
        return "
        <div class=\"col\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"{$this->img}\" class=\"card-img-top\" alt=\"{$this->name}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$this->name}</h5>
                    <p class=\"card-text\">Atque labore maxime accusamus quia placeat tenetur laboriosam aliquid ratione omnis debitis dignissimos natus non, necessitatibus iste quas impedit adipisci nostrum! Dolorem?</p>
                </div>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">Animale: {$this->category} - Taglia: {$this->size}</li>
                    <li class=\"list-group-item\">Materiale: {$this->material}</li>
                    <li class=\"list-group-item\">colore: {$this->color}</li>
                    <li class=\"list-group-item\">Prezzo: {$this->get_formatted_price()}</li>
                </ul>
            </div>
        </div>
        ";
    }
}