<?php

class Product {

    public $id;
    public $name;
    public $price;
    public $quantity;
    public $description;

    public function __construct($id, $name, $price, $quantity, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
    }

    public function getSummary() {
        return "Product: $this->name | Price: $this->price | Stock: $this->quantity";
    }

    public function getTotalValue() {
        return $this->price * $this->quantity;
    }

    public function isAvailable() {
        return $this->quantity > 0 ? "Available" : "Out of stock";
    }

    class BuyProduct{
        
    }
}