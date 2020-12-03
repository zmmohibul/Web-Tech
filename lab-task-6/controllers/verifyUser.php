<?php

require_once "userInfo.php";

function isUserValid($mail, $pass) {
    $user = getUser($mail);
    if(isset($user['user_email'])) {
         if($user['user_password'] === $pass) {
            session_start();
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['loggedin']= true;
            return array("success"=>"true");
         } else {
            return array("success"=>"false", "err"=>"Invalid password");
         }
         
     } else {
         return array("success"=>"false", "err"=>"No acount with this email exist");
     }
}

?>