<?php
namespace App\Controllers;

use App\Models\Category;
use App\Database\Database;



require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Category.php';

class CategoriesController
{
    private $category;


    public function __construct()

    {
        $pdo = Database::getConnection(); 
        $this->category = new Category($pdo);  
    }

    public function categoriesPage()
    {
        $categories = $this->category->showCategory();
        $pageTitle = 'Categories';

         require __DIR__ . '/../pages/Categories.php';
    }


    public function addCategories()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $categoryName = trim($_POST['category']);

            if(empty($categoryName)){
                header('Location: /swift_inventory/categories');
                exit;
            }

            $this->category->category($categoryName);
            header('Location: /swift_inventory/categories');

            exit;

            
        }
    }

    public function deleteCategory()
    {
        if($_SERVER["REQUEST_METHOD"] === 'POST'){
            $categoryId = trim($_POST['category_id']);

            $this->category->delete($categoryId);
            header('Location: /swift_inventory/categories');

        }
    }
}