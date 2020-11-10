<?php 

require_once 'model.php';

function fetchAllProducts(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}

function seekProduct($valueToSearch) {
	return searchProduct($valueToSearch);
}
?>
