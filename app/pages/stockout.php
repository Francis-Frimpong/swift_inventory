<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<h4 class="mb-3">Stock Out</h4>

<div class="card">
<div class="card-body">

<form method="POST" action="/swift_inventory/stockout">

<div class="mb-3">
<label class="form-label">Product</label>
<select class="form-select" name="product">
<?php foreach($products as $product):?>
<option value="<?= htmlspecialchars($product['id']) ?>"><?= htmlspecialchars($product['name']) ?></option>
<?php endforeach?>
</select>
</div>

<div class="mb-3">
<label class="form-label">Quantity</label>
<input type="number" class="form-control" name="quantity">
</div>

<div class="mb-3">
<label class="form-label">Selling Price</label>
<input type="number" class="form-control" name="selling-price">
</div>

<button class="btn btn-danger">Record Sale</button>

</form>

</div>
</div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>
