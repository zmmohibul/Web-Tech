<?php  

include 'controller/productInfo.php';

if(isset($_GET['search'])) {
    $products = seekProduct($_GET['valueToSearch']);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
    <input type="submit" name="search" value="Search"><br><br>            
</form>


<?php if(isset($products)): ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($products as $i => $product): ?>
                <tr>
                    <td><a href="showStudent.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
                    <td><?php echo $product['buying_price'] ?></td>
                    <td><?php echo $product['selling_price'] ?></td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
<?php endif ?>    
</body>
</html>