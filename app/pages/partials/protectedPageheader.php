<?php  
$navLinks = [
  "Dashboard" =>'/swift_inventory/dashboard', 
  "Products" => "/swift_inventory/products", 
  "Categories" => "/swift_inventory/categories", 
  "Stock In" => "/swift_inventory/stockin", 
  "Stock Out" => "/swift_inventory/stockout", 
  
];

  $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  // strip base path
  $basePath = '/swift_inventory';
  if (strpos($currentUri, $basePath) === 0) {
      $currentUri = substr($currentUri, strlen($basePath));
  }
  if ($currentUri === '') {
      $currentUri = '/';
  }

?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= isset($pageTitle) ? $pageTitle : "Inventory System" ?> </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
<div class="container-fluid">
<a class="navbar-brand" href="#">Inventory System</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="nav">
<ul class="navbar-nav ms-auto">
    <?php foreach($navLinks as $label => $url):
    $linkPath = parse_url($url, PHP_URL_PATH);
    $linkPath = str_replace($basePath, '', $linkPath)
    
    ?>
<li class="nav-item">
    <a class="nav-link <?= $currentUri === $linkPath? 'active': '' ?>?>" href="<?= htmlspecialchars($url) ?>"><?= htmlspecialchars($label) ?></a>
</li>
<?php endforeach?>
</ul>
</div>
</div>
</nav>

<div class="container py-4">
