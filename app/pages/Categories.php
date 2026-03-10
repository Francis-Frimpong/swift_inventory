<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<h4 class="mb-3">Categories</h4>

<div class="card mb-4">
<div class="card-body">
<form class="row g-2">
<div class="col-12 col-md-8">
<input type="text" class="form-control" placeholder="Category name">
</div>
<div class="col-12 col-md-4">
<button class="btn btn-primary w-100">Add Category</button>
</div>
</form>
</div>
</div>

<div class="card">
<table class="table mb-0">
<thead>
<tr>
<th>Name</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>Food</td>
<td>
<button class="btn btn-sm btn-danger">Delete</button>
</td>
</tr>
</tbody>
</table>
</div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>
