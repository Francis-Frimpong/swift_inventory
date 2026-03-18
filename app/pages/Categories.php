<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

<h4 class="mb-3">Categories</h4>

<div class="card mb-4">
<div class="card-body">
<form class="row g-2" method="POST" action="/swift_inventory/categories">
<div class="col-12 col-md-8">
<input type="text" class="form-control" placeholder="Category name" name="category">
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
<?php foreach($categories as $category): ?>
<tr>
    <td><?= htmlspecialchars($category['name']) ?></td>
    <td>
        <form action="/swift_inventory/categories/delete" method="POST" class="d-inline">
            <!-- Hidden input to send the category ID -->
            <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
            <button type="submit" class="btn btn-sm btn-danger" 
                    onclick="return confirm('Are you sure you want to delete this category?');">
                Delete
            </button>
        </form>
    </td>
</tr>
<?php endforeach; ?>   
</tbody>
</table>
</div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>
