<?php  
require_once '../model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['buying_price'];
    $data['selling_price'] = $_POST['selling_price'];


  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showAllProduct.php');
  } else {
	echo 'You are not allowed to access this page.';
  }   
}


?>