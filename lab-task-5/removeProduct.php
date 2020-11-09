<?php 

require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['id']);

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php
  require_once 'simpleStyle.php'
  ?>
</head>
<body>

 <div>
   <form action="controller/deleteProduct.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>Delete Product</legend>
      <label for="">Name: <?php echo $product['name'] ?></label>
      <br>
      <label for="">Buying Price: <?php echo $product['buying_price'] ?></label>
      <br>
      <label for="">Selling Price: <?php echo $product['selling_price'] ?></label>
      <br>
      <hr>
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <input type="submit" name = "deleteProduct" value="Delete">
      <input type="reset"> 
    </fieldset>
  </form> 
 </div>
</body>
</html>
