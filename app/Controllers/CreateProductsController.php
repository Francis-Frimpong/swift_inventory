<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\AddProducts;
use App\Database\Database;


require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/AddProducts.php';
require_once __DIR__ . '/../Database/Database.php';


class CreateProductsController
{
    private $category;
    private $addProduct;

    public function __construct()
    {
        $pdo = Database::getConnection();

        $this->category = new Category($pdo);
        $this->addProduct = new AddProducts($pdo);
    }
    public function createProductsPage()
    {
        $categories = $this->category->showCategory();

         $pageTitle = 'Add Product';

        require __DIR__ . '/../pages/Product-create.php';
    }

    public function addProduct()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $productName = trim($_POST['product-name']);
            $sku = trim($_POST['sku']);
            $category = trim($_POST['category']);
            $costPrice = trim($_POST['cost-price']);
            $sellingPrice = trim($_POST['selling-price']);

            if(empty($productName) || empty($sku) || empty($costPrice) || empty($sellingPrice)){
                header('location: /swift_inventory/create-products ');
                exit;
            }

            $this->addProduct->addProduct($productName, $sku, $category,$costPrice, $sellingPrice);

            header('location: /swift_inventory/products');
            exit;
        }
    }
}