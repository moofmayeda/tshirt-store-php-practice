<?php

$products = array();
$products[101] = "Logo Shirt, Red";
$products[102] = "Mike the Frog Shirt, Black";
$products[103] = "Mike the Fros Shirt, Blue";
$products[104] = "Logo Shirt, Green";

?><?php
$pageTitle = "Shirts";
$section = "shirts";
include('inc/header.php');
?>
  <div class="section page">
    <div class="wrapper">
      <h1>Mike's Full Catalog of Shirts</h1>
      <ul>
          <?php foreach($products as $product) { ?>
          <li><?php echo $product ?></li>
          <?php } ?>
      </ul>
    </div>
  </div>
<?php include('inc/footer.php'); ?>
