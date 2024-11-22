<?php
require_once __DIR__ . "/Category.php";

class Product
{
    private float $price;
    private Category $category;
    private string $name;
    private string $description;
    private string $imageUrl;
    private int $numberInStock;

    public function __construct(string $name, string $description, float $price, Category $category, string $imageUrl, int $numberInStock)
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
        $this->numberInStock = $numberInStock;
    }

    // Metodo isAvailable
    public function isAvailable(): bool
    {
        return $this->numberInStock > 0;
    }

    // Metodo buy
    public function buy(int $quantity = 1): bool
    {
        if ($quantity >= 1 && $quantity <= $this->numberInStock) {
            $this->numberInStock = $this->numberInStock - $quantity;
            return true;
        } else {
            // Prodotto finito o quantità non valida
            return false;
        }
    }

    // Getter methods
    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getNumberInStock(): int
    {
        return $this->numberInStock;
    }

    // Setter methods
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    public function setNumberInStock(int $numberInStock): void
    {
        $this->numberInStock = $numberInStock;
    }
}
