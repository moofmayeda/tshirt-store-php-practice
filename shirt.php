<?php include("inc/products.php");

$product_id = $_GET["id"];
$product = $products[$product_id];

$section = "shirts";
$pageTitle = $product["name"];
include("inc/header.php");
?>

<div class="section page">
  <div class="wrapper">
    <div class="breadcrumb"><a href="shirts.php">Shirts</a> <?php echo $product["name"]; ?></div>
    <div class="shirt-picture">
      <span>
        <img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
      </span>
    </div>
    <div class="shirt-details">
      <h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>
      <p class="note-designer">* All shirts are designed by Mike the Frog.</p>
    </div>

  </div>
</div>
<?php include("inc/footer.php"); ?>
