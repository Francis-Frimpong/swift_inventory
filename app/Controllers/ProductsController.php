<?php
namespace App\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Database\Database;

require_once __DIR__ .'/../Database/Database.php';
require_once __DIR__ .'/../Models/Products.php';





class ProductsController
{
    private $product;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->product = new Products($pdo);
    }

    public function productsPage()
    {
        $products = $this->product->showProduct();
        $pageTitle = 'Products';

        require __DIR__ . '/../pages/Products.php';
    }
}