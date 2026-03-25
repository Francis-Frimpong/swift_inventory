<?php
namespace App\Models;
USE PDO;

class StockOut
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function stockout($product, $quantity, $selling_price)
    {
        // 1. Start transaction
        $this->pdo->beginTransaction();

        // 2. Insert into stock_in
        $sql1 = "INSERT INTO stock_out (product_id, quantity, selling_price) 
                VALUES (?, ?, ?,)";
        $stmt1 = $this->pdo->prepare($sql1);
        $success1 = $stmt1->execute([$product, $quantity, $selling_price]);

        // 3. Update products quantity
        $sql2 = "UPDATE products 
                SET quantity = quantity - ? 
                WHERE id = ?";
        $stmt2 = $this->pdo->prepare($sql2);
        $success2 = $stmt2->execute([$quantity, $product]);

        // 4. Check if BOTH queries succeeded
        if ($success1 && $success2) {
            // ✅ Everything worked
            $this->pdo->commit();
            return true;
        } else {
            // ❌ Something failed
            $this->pdo->rollBack();
            return false;
        }
    }
}