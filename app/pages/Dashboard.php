<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<div class="row g-3">



<div class="col-6 col-md-3">
<div class="card text-bg-primary">
<div class="card-body">
<h6>Total Products</h6>
<h3><?= htmlspecialchars($totalProducts) ?></h3>
</div>
</div>
</div>

<div class="col-6 col-md-3">
<div class="card text-bg-success">
<div class="card-body">
<h6>Stock In</h6>
<h3><?= htmlspecialchars($totalStockIn) ?></h3>
</div>
</div>
</div>

<div class="col-6 col-md-3">
<div class="card text-bg-warning">
<div class="card-body">
<h6>Stock Out</h6>
<h3><?= htmlspecialchars($totalStockOut) ?></h3>
</div>
</div>
</div>

<div class="col-6 col-md-3">
<div class="card text-bg-danger">
<div class="card-body">
<h6>Low Stock</h6>
<h3><?= htmlspecialchars($lowStock) ?></h3>
</div>
</div>
</div>

</div>

<div class="card mt-4">
<div class="card-header">Recent Transactions</div>
<div class="table-responsive">
<table class="table table-striped mb-0">
<thead>
<tr>
<th>Product</th>
<th>Type</th>
<th>Quantity</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<tr>
<td>Rice</td>
<td>Stock In</td>
<td>50</td>
<td>2026-03-01</td>
</tr>
</tbody>
</table>
</div>
</div>


<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>