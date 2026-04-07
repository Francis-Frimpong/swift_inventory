<?php
namespace App\Models;
USE PDO;
USE Exception;

class Reports
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getReport()
    {
        try{
            $sql = "SELECT 
                p.name AS product_name,

                COALESCE(si.total_in, 0) AS total_stock_in,
                COALESCE(so.total_out, 0) AS total_stock_out,

                COALESCE(si.total_in, 0) - COALESCE(so.total_out, 0) AS remaining_stock

            FROM products p

            LEFT JOIN (
                SELECT product_id, SUM(quantity) AS total_in
                FROM stock_in
                GROUP BY product_id
            ) si ON si.product_id = p.id

            LEFT JOIN (
                SELECT product_id, SUM(quantity) AS total_out
                FROM stock_out
                GROUP BY product_id
            ) so ON so.product_id = p.id;";
            $stmt = $this->pdo->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll();

        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}