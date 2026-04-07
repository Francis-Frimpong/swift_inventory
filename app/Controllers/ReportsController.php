<?php
namespace App\Controllers;

use App\Models\Reports;
use App\Database\Database;



require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Models/Report.php';


class ReportsController

{
    private $report;

    public function __construct()
    {
        $pdo = Database::getConnection();
        $this->report = new Reports($pdo);
    }

    public function reportsPage()
    {
        $reports = $this->report->getReport();
        $pageTitle = 'Reports';
        require __DIR__ . '/../pages/Reports.php';
        
    }

   
}