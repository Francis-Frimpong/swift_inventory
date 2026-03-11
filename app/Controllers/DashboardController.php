<?php
namespace App\Controllers;

require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Dashboard.php';

use App\Database\Database;
use App\Models\Dashboard;

class DashboardController
{

    private $dashboard;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->dashboard = new Dashboard($pdo);
    }


    public function dashboardPage()
    {

        // overall Totals
        $totalProducts = $this->dashboard->totalProducts();
        $totalStockIn = $this->dashboard->totalStockIn();

        $pageTitle = 'Inventory Dashboard';

        require __DIR__ . '/../pages/Dashboard.php';

    }
}