<?php
namespace App\Models;

USE PDO;

class Dashboard{
    private $pdo;

    public function __construct(PDO $pdo)
    { 
        $this->pdo = $pdo;
    }

    public function totalProducts()
    {
        $sql = "SELECT SUM(name) AS total_products FROM products";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();

        return $results['total_products'] ?? 0;
    }
}