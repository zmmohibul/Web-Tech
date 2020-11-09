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
   <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>Edit Product</legend>
      <label for="name">Name:</label><br>
      <input value="<?php echo $product['name'] ?>" type="text" id="name" name="name"><br>
      <label for="surname">Buying Price:</label><br>
      <input value="<?php echo $product['buying_price'] ?>" type="text" id="surname" name="buying_price"><br>
      <label for="username">Selling Price:</label><br>
      <input value="<?php echo $product['selling_price'] ?>" type="text" id="username" name="selling_price"><br>
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <input type="submit" name = "updateProduct" value="Update">
      <input type="reset"> 
    </fieldset>
  </form> 
 </div>
</body>
</html>

