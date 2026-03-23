<?php
namespace App\Controllers;
use App\Models\Category;
use App\Database\Database;


require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Database/Database.php';


class CreateProductsController
{
    private $category;
    public function __construct()
    {
        $pdo = Database::getConnection();

        $this->category = new Category($pdo);
    }
    public function createProductsPage()
    {
        $categories = $this->category->showCategory();

         $pageTitle = 'Add Product';

        require __DIR__ . '/../pages/Product-create.php';
    }
}