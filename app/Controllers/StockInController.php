<?php
namespace App\Controllers;

class StockInController
{
    public function stockinPage()
    {
        $pageTitle = 'Stock In';
        require __DIR__ . '/../pages/Stockin.php';

    }
}