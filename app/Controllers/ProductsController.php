<?php
namespace App\Controllers;

USE Exception;

use App\Models\Products;
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

    public function deleteProduct()
    {
        try{

            if($_SERVER["REQUEST_METHOD"] === 'POST'){
                 $productId = trim($_POST['product_id']);
     
                 $deleted = $this->product->delete($productId);
                if ($deleted) {
                     header('Location: /swift_inventory/products');
                     exit;
                 } else {
                     echo "Delete failed";
                 }
     
             }
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }
}