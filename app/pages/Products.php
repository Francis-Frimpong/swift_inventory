<?php require_once __DIR__ .'/../pages/partials/protectedPageheader.php';?>

    <div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Products</h4>
    <a class="btn btn-primary" href="/swift_inventory/create-products">Add Product</a>
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
            <?php if(empty($products)):?>
                <h3 class="text-center text-muted my-4">No product has been added!</h3>
            <?php else: ?>
            <tbody>
            <?php foreach($products as $product):?>   
        <tr>
        <td><?= htmlspecialchars($product['name']) ?></td>
        <td><?= htmlspecialchars($product['sku']) ?></td>
        <td><?= htmlspecialchars($product['category_name']) ?></td>
        <td><?= htmlspecialchars($product['cost_price']) ?></td>
        <td><?= htmlspecialchars($product['quantity']) ?? 0 ?></td>
        <td>
        <button class="btn btn-sm btn-warning">Edit</button>
        <!-- <button class="btn btn-sm btn-danger">Delete</button> -->
          <form action="/swift_inventory/products/delete" method="POST" class="d-inline">
            <!-- Hidden input to send the category ID -->
            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
            <button type="submit" class="btn btn-sm btn-danger" 
                    onclick="return confirm('Are you sure you want to delete this product?');">
                Delete
            </button>
        </form>
        </td>
        </tr>
        <?php endforeach ?>
    </tbody>
        <?php endif ?>
        </table>
    </div>
    </div>

<?php require_once __DIR__ .'/../pages/partials/protectedPageFooter.php';?>