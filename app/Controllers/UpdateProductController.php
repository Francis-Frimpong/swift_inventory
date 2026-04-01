<?php
namespace App\Controllers;

USE Exception;

use App\Models\Products;
use App\Models\Category;
use App\Database\Database;


require_once __DIR__ .'/../Database/Database.php';
require_once __DIR__ .'/../Models/Products.php';
require_once __DIR__ .'/../Models/Category.php';





class UpdateProductController
{
    private $product;
    private $category;
    private $updateProduct;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->product = new Products($pdo);
        $this->category = new Category($pdo);
    }

    public function productUpdatePage()
    {
        $id = $_GET['id'] ?? null;
        $categories = $this->category->showCategory();
        
        $product = $this->product->getProductByid($id);
      
        $pageTitle = 'Update Product';

        require __DIR__ . '/../pages/Product-update.php';
    }

    
}