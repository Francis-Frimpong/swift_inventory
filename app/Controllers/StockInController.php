<?php
namespace App\Controllers;

require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Products.php';

use App\Database\Database;
use App\Models\Products;

class StockInController
{
    private $products;
    

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->products = new Products($pdo);
    }
    public function stockinPage()
    {
        $products = $this->products->showProduct();
        $pageTitle = 'Stock In';
        require __DIR__ . '/../pages/Stockin.php';

    }
}