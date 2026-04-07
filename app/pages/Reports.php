<?php

use App\Models\Reports;

 require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<h4 class="mb-3">Inventory Report</h4>

<div class="card">
<div class="table-responsive">
<table class="table table-striped mb-0">
<thead>
<tr>
<th>Product</th>
<th>Stock In</th>
<th>Stock Out</th>
<th>Current Stock</th>
</tr>
</thead>
<tbody>
<?php if(empty($reports)):?>
        <h3 class="text-center text-muted my-4">No report has been created.</h3>
    <?php else: ?>
    <tbody>
    <?php foreach($reports as $report):?>  
        <tr>
        <td><?= htmlspecialchars($report['product_name']) ?></td>
        <td><?= htmlspecialchars($report['total_stock_in']) ?></td>
        <td><?= htmlspecialchars($report['total_stock_out']) ?></td>
        <td><?= htmlspecialchars($report['remaining_stock']) ?></td>
        </tr>
    <?php endforeach?>
<?php endif?>
</tbody>
</table>
</div>
</div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>
