<?php
namespace App\Controllers;

class CreateProductsController
{
    public function createProductsPage()
    {
         $pageTitle = 'Add Product';

        require __DIR__ . '/../pages/Product-create.php';
    }
}