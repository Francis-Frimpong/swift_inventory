<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<h4 class="mb-3">Stock In</h4>

<div class="card">
<div class="card-body">

<form>

<div class="mb-3">
<label class="form-label">Product</label>
<select class="form-select">
<?php foreach($products as $product):?>
<option value="<?= htmlspecialchars($product['id']) ?>"><?= htmlspecialchars($product['name']) ?></option>
<?php endforeach?>
</select>
</div>

<div class="mb-3">
<label class="form-label">Quantity</label>
<input type="number" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Purchase Price</label>
<input type="number" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Supplier</label>
<input type="text" class="form-control">
</div>

<button class="btn btn-success">Record Stock</button>

</form>

</div>
</div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>