<?php
namespace App\Controllers;

class ProductsController
{
    public function productsPage()
    {
         $pageTitle = 'Products';

        require __DIR__ . '/../pages/Products.php';
    }
}