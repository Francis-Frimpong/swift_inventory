<?php
namespace App\Controllers;

class StockOutController
{
    public function stockoutPage()
    {
        $pageTitle = 'Stock Out';
        require __DIR__ . '/../pages/Stockout.php';
    }
}