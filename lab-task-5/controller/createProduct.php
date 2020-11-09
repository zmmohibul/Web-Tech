<?php  
require_once '../model.php';

echo "hello";
if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['buying_price'];
    $data['selling_price'] = $_POST['selling_price'];
    print_r($data);
// 	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
// 	$data['image'] = basename($_FILES["image"]["name"]);

// 	$target_dir = "../uploads/";
// 	$target_file = $target_dir . basename($_FILES["image"]["name"]);

// 	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
//     echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
}
  if (addProduct($data)) {
      echo 'Successfully added!!';
      header('Location: ../showAllProduct.php');
  } else {
    print_r($data);
	echo 'You are not allowed to access this page.';
}

?>