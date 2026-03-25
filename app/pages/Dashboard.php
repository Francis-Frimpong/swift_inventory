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
<?php if(empty($recentTransactions)):?>
   <h3 class="text-center text-muted my-4">No Transactions has been recorded!</h3>
<?php else: ?>
<?php foreach($recentTransactions as $transaction):?>
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
<td><?= htmlspecialchars($transaction['name']) ?></td>
<td><?= htmlspecialchars($transaction['type']) ?></td>
<td><?= htmlspecialchars($transaction['quantity']) ?></td>
<td><?= htmlspecialchars(date('M d, Y', strtotime($transaction['date']))) ?></td>
</tr>
</tbody>
</table>
<?php endforeach?>
<?php endif?>
</div>
</div>


<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>