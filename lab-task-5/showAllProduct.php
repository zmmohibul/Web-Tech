<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying Price</th>
            <th>Selling Price</th>
            <th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="showStudent.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
				<td><?php echo $product['buying_price'] ?></td>
				<td><?php echo $product['selling_price'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="removeProduct.php?id=<?php echo $product['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
</table>
<h3><a href="addProduct.php">Add New Product</a></h3>



</body>
</html>