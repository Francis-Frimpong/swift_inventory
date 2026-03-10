<?php
namespace App\Controllers;

class CategoriesController
{
    public function categoriesPage()
    {
        $pageTitle = 'Categories';

         require __DIR__ . '/../pages/Categories.php';
    }
}