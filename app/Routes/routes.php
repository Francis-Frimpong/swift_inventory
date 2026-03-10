<?php
return array_merge(
    require __DIR__ .'/dashboardRoutes.php',
    require __DIR__ .'/productsRoutes.php',
    require __DIR__ .'/categoriesRoutes.php',
    require __DIR__ .'/stockinRoutes.php',
    require __DIR__ .'/stockoutRoutes.php',
);