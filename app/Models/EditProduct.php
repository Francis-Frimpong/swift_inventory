<?php
namespace App\Models;

USE Exception;
USE PDO;

class EditProduct
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    } 

    public function editProduct($name, $sku, $category, $cost_price, $selling_price,$id){
        try{

            $sql = "UPDATE products
                SET name = ?,
                    sku =  ?,
                    category_id = ?,
                    cost_price = ?,
                    selling_price = ?
                WHERE id = ?;";
        
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name, $sku, $category, $cost_price, $selling_price, $id]);
            $stmt->rowCount();
            
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }
}