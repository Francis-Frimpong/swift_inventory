<?php
namespace App\Controllers;

class DashboardController
{
    public function dashboardPage()
    {

        $pageTitle = 'Inventory Dashboard';

        require __DIR__ . '/../pages/Dashboard.php';

    }
}