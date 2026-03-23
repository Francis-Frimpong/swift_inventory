<?php

namespace App\Models;

USE PDO;

class Products
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function showProduct()
    {
        $sql = "SELECT name, sku, category_id, cost_price ,quantity FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}