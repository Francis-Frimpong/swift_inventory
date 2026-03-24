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
        $sql = "SELECT 
            p.id,
            p.name, 
            p.sku, 
            c.name AS category_name, 
            p.cost_price, 
            p.quantity
            FROM products p
            JOIN categories c ON p.category_id = c.id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}