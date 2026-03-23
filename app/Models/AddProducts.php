<?php
namespace App\Models;


USE PDO;

class AddProducts
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addProduct($productName, $sku, $category, $costPrice, $sellingPrice)
    {
        $sql = "INSERT INTO products (name, sku, category_id, cost_price, selling_price) VALUE (?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$productName, $sku, $category, $costPrice, $sellingPrice]);

        return $stmt;
    }

}