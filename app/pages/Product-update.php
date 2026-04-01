<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<div class="card">
<div class="card-header">Update Product</div>
<div class="card-body">

<form method="POST" action="/swift_inventory/update-product">

<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text" class="form-control" name="product-name" value="<?= $product['name'] ?? ''?>">
</div>

<div class="mb-3">
<label class="form-label">SKU</label>
<input type="text" class="form-control" name="sku" value="<?= $product['sku'] ??'' ?>">
</div>

<div class="mb-3">
<label class="form-label">Category</label>
<select class="form-select" name="category">
<?php foreach($categories as $category):?>
<option value="<?= htmlspecialchars($category['id']) ?>"
    <?= $category['id'] == $product['category_id'] ? 'selected' : '' ?>>
    <?= htmlspecialchars($category['name']) ?>
</option>
<?php endforeach?>
</select>
</div>

<div class="mb-3">
<label class="form-label">Cost Price</label>
<input type="number" class="form-control" name="cost-price" value="<?= $product['cost_price'] ??'' ?>">
</div>

<div class="mb-3">
<label class="form-label">Selling Price</label>
<input type="number" class="form-control" name="selling-price" value="<?= $product['selling_price'] ?? '' ?>">
</div>

<button class="btn btn-primary">Update Product</button>

</form>

</div>
</div>


<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>