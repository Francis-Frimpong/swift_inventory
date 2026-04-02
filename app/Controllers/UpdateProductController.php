<?php
namespace App\Controllers;

USE Exception;

use App\Models\Products;
use App\Models\Category;
use App\Models\EditProduct;
use App\Database\Database;


require_once __DIR__ .'/../Database/Database.php';
require_once __DIR__ .'/../Models/Products.php';
require_once __DIR__ .'/../Models/Category.php';
require_once __DIR__ .'/../Models/EditProduct.php';





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
        $this->updateProduct = new EditProduct($pdo);
    }

    public function productUpdatePage()
    {
        $id = $_GET['id'] ?? null;
        
        $categories = $this->category->showCategory();
        
        $product = $this->product->getProductByid($id);
      
        $pageTitle = 'Update Product';

        require __DIR__ . '/../pages/Product-update.php';
    }

    public function updateProduct()
    {
        try{

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_POST['id'] ?? null;
    
                $productName = trim($_POST['product-name']);
                $sku = trim($_POST['sku']);
                $category = trim($_POST['category']);
                $costPrice = trim($_POST['cost-price']);
                $sellingPrice = trim($_POST['selling-price']);
        
                if(empty($productName) || empty($sku) || empty($costPrice) || empty($sellingPrice)){
                    header("location: /swift_inventory/update-product?id=$id");
                    exit;
                }

                $rowsAffected = $this->updateProduct->editProduct($productName, $sku, $category, $costPrice, $sellingPrice, $id);

                if($rowsAffected === 0){
                    echo "No changes were made or product not found.";
                    exit;
                }

                header('location: /swift_inventory/products');
                exit;
            }
        }catch(Exception $e){
            echo "Error updating product: " . $e->getMessage();
            exit;
        }

    }

    
}