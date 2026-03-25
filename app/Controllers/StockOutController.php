<?php
namespace App\Controllers;

require_once __DIR__ . '/../Models/Products.php';
require_once __DIR__ . '/../Database/Database.php';

use App\Database\Database;
use App\Models\Products;



class StockOutController
{
    private $products;

      public function __construct()
    {
        $pdo = Database::getConnection();
        $this->products = new Products($pdo);
    
    }

    public function stockoutPage()
    {
        $products = $this->products->showProduct();
        $pageTitle = 'Stock Out';
        require __DIR__ . '/../pages/Stockout.php';
    }
}