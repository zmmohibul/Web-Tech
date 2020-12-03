<?php 

require_once 'dbConnect.php';
$userType = array('farmer', 'admin', 'client');

function showUser($email){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `all_user` where user_email = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function addUser($data) {
	$conn = db_conn();
    $selectQuery = "INSERT into all_user (user_email, user_password, user_type, first_name, last_name, address, phone)
    VALUES (:user_email, :user_password, :user_type, :first_name, :last_name, :address, :phone)";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':user_email' => $data['user_email'],
            ':user_password' => $data['user_password'],
            ':user_type' => $data['user_type'],
            ':first_name' => $data['first_name'],
            ':last_name' => $data['last_name'],
            ':address' => $data['address'],
            ':phone' => $data['phone']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;

}
?>