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
  <fieldset>
    <legend>Add Products</legend>
    <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="buying_price">Buying Price:</label><br>
      <input type="text" id="buying_price" name="buying_price"><br>
      <label for="selling_price">Selling Price:</label><br>
      <input type="text" id="selling_price" name="selling_price"><br>
      <input type="submit" name = "createProduct" value="Create">
      <input type="reset"> 
    </form> 
  </fieldset>
 </div>

</body>
</html>

