<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<div class="card">
<div class="card-header">Add Product</div>
<div class="card-body">

<form>

<div class="mb-3">
<label class="form-label">Product Name</label>
<input type="text" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">SKU</label>
<input type="text" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Category</label>
<select class="form-select">
<option>Food</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Cost Price</label>
<input type="number" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Selling Price</label>
<input type="number" class="form-control">
</div>

<button class="btn btn-primary">Save Product</button>

</form>

</div>
</div>


<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>