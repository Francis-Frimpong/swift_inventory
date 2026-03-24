<?php
namespace App\Models;
USE PDO;

class StockIn
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function stockin($product, $quantity, $purchase_price, $supplier)
    {
        $sql = "INSERT INTO stock_in (product_id, quantity, purchase_price, supplier) VALUE (?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$product, $quantity, $purchase_price, $supplier]);

        return $stmt;
    }
}