<?php
namespace App\Controllers;

class ReportsController
{
    public function reportsPage()
    {
        $pageTitle = 'Reports';
        require __DIR__ . '/../pages/Reports.php';

    }
}