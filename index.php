<?php
require 'ini.php';
require 'config/connect.php';

session_start();

$sql_select = "select img, name from products order by id desc";
$data = $db->query($sql_select);
$products = $data->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet's Home | О нас</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require 'header.php'; ?>

<div class="devis">
  <div class="container">
    <div class="devis__inner d-flex align-items-center justify-content-center">
      <h3>Сделайте своих питомцев счастливыми</h3>
    </div>
  </div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <? foreach ($products as $key => $product): ?>
      <div class="carousel-item <?= $key == 0 ? 'active' : ''?>">
        <img src="media/<?=$product['img']?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?=$product['name']?></h5>
        </div>
      </div>
    <? endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <script src="scripts/bootstrap.bundle.js"></script>
  <script src="scripts/jquery-3.3.1.min.js"></script>
  <script src="scripts/main.js"></script>
</body>
</html>