<?php
namespace App\Controllers;

require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Products.php';
require_once __DIR__ . '/../Models/StockIn.php';

use App\Database\Database;
use App\Models\Products;
use App\Models\StockIn;

class StockInController
{
    private $products;
    private $addStock;
    

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->products = new Products($pdo);
        $this->addStock = new StockIn($pdo);
    }
    public function stockinPage()
    {
        $products = $this->products->showProduct();
        $pageTitle = 'Stock In';
        require __DIR__ . '/../pages/Stockin.php';

    }

    public function addStockIn()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $product = trim($_POST['product']);
            $quantity = trim($_POST['quantity']);
            $purchase_price = trim($_POST['purchase-price']);
            $supplier = trim($_POST['supplier']);

            if(empty($quantity) || empty($purchase_price) || empty($supplier)){
                header('location: /swift_inventory/stockin ');
                exit;
            }

            $this->addStock->stockin($product, $quantity, $purchase_price, $supplier);

             header('location: /swift_inventory/dashboard');
            exit;

        }
    }
}