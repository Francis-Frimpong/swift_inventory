<?php
return array_merge(
    require __DIR__ .'/dashboardRoutes.php',
    require __DIR__ .'/productsRoutes.php',
    require __DIR__ .'/categoriesRoutes.php',
    require __DIR__ .'/stockinRoutes.php',
    require __DIR__ .'/stockoutRoutes.php',
    require __DIR__ .'/reportsRoutes.php',
    require __DIR__ .'/createproductsRoutes.php',
    require __DIR__ .'/updateProductRoutes.php',
);