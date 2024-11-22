<?php
require_once __DIR__ . "/Product.php";
class Toy extends Product
{
    public $size;
    public $material;

    public function __construct(string $name, string $description, float $price, Category $category, string $imageUrl, int $numberInStock, string $size, string $material)
    {
        parent::__construct($name,  $description,  $price,  $category,  $imageUrl,  $numberInStock);
        $this->size = $size;
        $this->material = $material;
    }

    public function getDescription(): string
    {
        return "Toy: " . parent::getDescription();
    }
}
