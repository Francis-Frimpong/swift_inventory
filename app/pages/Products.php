<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

    <div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Products</h4>
    <a class="btn btn-primary" href="#">Add Product</a>
    </div>

    <div class="card">
    <div class="table-responsive">
    <table class="table table-striped mb-0">
    <thead>
    <tr>
    <th>Name</th>
    <th>SKU</th>
    <th>Category</th>
    <th>Price</th>
    <th>Quantity</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Rice</td>
    <td>SKU001</td>
    <td>Food</td>
    <td>50</td>
    <td>40</td>
    <td>
    <button class="btn btn-sm btn-warning">Edit</button>
    <button class="btn btn-sm btn-danger">Delete</button>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>