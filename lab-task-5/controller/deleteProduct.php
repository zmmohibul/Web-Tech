<?php 

require_once '../model.php';

if (isset($_POST['deleteProduct'])) {
    if (deleteProduct($_POST['id'])) {
        header('Location: ../showAllProduct.php');
    }
}

 ?>