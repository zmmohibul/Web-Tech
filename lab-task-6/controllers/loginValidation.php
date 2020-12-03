<?php
include '../controllers/verifyUser.php';

// define variables and set to empty values
$passwordErr = $emailErr = "*";
$invalidEmail = $invalidPassword = "";
$allClear = false;
$password = $email = "";


if (isset($_POST["loginSubmit"])) {

    if (empty($_POST["email"])) {
        $emailErr = "*Email is required";
        $allClear = false;
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Invalid email format";
            $allClear = false;
        } else {
            $allClear = true;
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "*Please enter password";
        $allClear = false;
    } else {
        $password = $_POST["password"];
        $allClear = true;
    }

    if ($allClear) {
        $loginCredentialInfo = isUserValid($email, $password);
        if($loginCredentialInfo["success"] === "true") {
            echo "Successfully logged in";
            header('Location: userProfile.php');
        } else {
            $err = $loginCredentialInfo["err"];
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>