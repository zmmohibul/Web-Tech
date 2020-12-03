<?php 
    $emailErr = $passwordErr = $confirmPassErr = $firstNameErr = $lastNameErr = $addressErr = $phoneErr = "*";
    $email = $password = $confirmPass = $first_name = $last_name = $address = $phone = "";
    $allClear = false;


    if (isset($_POST["registrationSubmit"])) {

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
            $passwordErr = "*Password is required";
            $allClear = false;
        } else {
            $password = $_POST["password"];
            $allClear = true;
        }

        if (empty($_POST["confirmPass"])) {
            $confirmPassErr = "*Confirm Password required";
            $allClear = false;
        } else {
            $confirmPass = $_POST["confirmPass"];
            if ($password === $confirmPass) {
                $allClear = true;
            } else {
                $passwordErr = "Password does not match";
                $allClear = false;
            }
        }

        if (empty($_POST["first_name"])) {
            $firstNameErr = "*First Name is Required";
            $allClear = false;
        } else {
            $first_name = test_input($_POST["first_name"]);
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$first_name)) {
                $firstNameErr = "Only letters, '.' and '-' are allowed";
                $allClear = false;
            } else {
                $allClear = true;
            }
        }

        if (empty($_POST["last_name"])) {
            $lastNameErr = "*Last Name is Required";
            $allClear = false;
        } else {
            $last_name = test_input($_POST["last_name"]);
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$last_name)) {
                $lastNameErr = "Only letters, '.' and '-' are allowed";
                $allClear = false;
            } else {
                $allClear = true;
            }
        }

        if (empty($_POST["address"])) {
            $addressErr = "*Address is required";
            $allClear = false;
        } else {
            $address = test_input($_POST["address"]);
            $allClear = true;
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "*Phone Num Required";
            $allClear = false;
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9-+' ]*$/",$phone)) {
                $phoneErr = "Invalid number formar";
                $allClear = false;
            } else {
                $allClear = true;
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