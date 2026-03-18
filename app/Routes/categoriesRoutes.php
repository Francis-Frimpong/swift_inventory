<?php
return [
    'GET /categories' => ['CategoriesController', 'categoriesPage'],
    'POST /categories' => ['CategoriesController', 'addCategories'],
    'POST /categories/delete' => ['CategoriesController', 'deleteCategory'],
    
];