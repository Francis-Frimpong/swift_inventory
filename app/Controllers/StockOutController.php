<?php
namespace App\Controllers;

require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Products.php';
require_once __DIR__ . '/../Models/StockOut.php';


use App\Database\Database;
use App\Models\Products;
use App\Models\StockOut;



class StockOutController
{
    private $products;
    private $stockout;

      public function __construct()
    {
        $pdo = Database::getConnection();
        $this->products = new Products($pdo);
        $this->stockout = new StockOut($pdo);
    
    }

    public function stockoutPage()
    {
        $products = $this->products->showProduct();
        $pageTitle = 'Stock Out';
        require __DIR__ . '/../pages/Stockout.php';
    }

       public function removeStock()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $product = trim($_POST['product']);
            $quantity = trim($_POST['quantity']);
            $selling_price = trim($_POST['selling-price']);
          

            if(empty($quantity) || empty($selling_price)){
                header('location: /swift_inventory/stockout ');
                exit;
            }

            $this->stockout->stockout($product, $quantity, $selling_price);

            header('location: /swift_inventory/dashboard');
            exit;

        }
    }
}