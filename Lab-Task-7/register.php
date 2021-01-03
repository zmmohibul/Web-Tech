<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"
          href="styles.css">
</head>

<body>
<div class="container">
    <div class="my-3"></div>
    <?php include_once '../includes/header.php' ?>
    <h3 class="display-4">Registration Form</h3>

    <form action="success" id="reg-form" autocomplete="off">
        <div class="form-row">
            <div class="form-group col-xm-12 col-md-6">
                <label for="first-name">First Name</label>
                <input autocomplete="off" type="text" name="firstname" id="first-name" class="form-control"
                        placeholder="Enter First Name">
                <span id="firsNameErr" class="hidden err"></span>
            </div>

            <div class="form-group col-xm-12 col-md-6">
                <label for="last-name">Last Name</label>
                <input autocomplete="off" type="text" name="lastname" id="last-name" class="form-control"
                       placeholder="Enter Last Name">
                <span id="lastNameErr" class="hidden err"></span>
            </div>
        </div>

        <div class="form-row">
        <div class="form-group col-xm-12 col-md-6">
                <label for="email">Email</label>
                <input autocomplete="off" type="text" name="email" id="email" class="form-control"
                       placeholder="Enter Email">
                <span id="emailErr" class="hidden err"></span>
            </div>

            <div class="form-group col-xm-12 col-md-6">
                <label for="cell">Cell</label>
                <input autocomplete="off" type="text" name="cell" id="cell" class="form-control"
                       placeholder="Enter Cell No">
                <span id="cellErr" class="hidden err"></span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col">
                <label for="street-address">Address</label>
                <input autocomplete="off" type="text" name="strAddress" id="street-address" class="form-control"
                        placeholder="Street Address">
                <span id="addressErr" class="hidden err"></span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col">
                <label for="password">Passwrod</label>
                <input autocomplete="off" type="password" name="password" id="password" class="form-control">
                <span id="passwordErr" class="hidden err"></span>
            </div>
            <div class="form-group col">
                <label for="confirmPassword">Confirm Password</label>
                <input autocomplete="off" type="password" name="confirmPassword" id="confirmPassword"
                       class="form-control">
                <span id="confirmPassErr" class="hidden err"></span>
            </div>
        </div>

        <a class="btn btn-primary btn-lg" href="http://localhost/farmfood/views/loginRegister/unsetSession.php" role="button">Back to Login</a>
        <button type="submit" class="btn btn-success btn-lg">Register</button>
    </form>

    <script src="js/register.js"></script>
</div>
</body>

</html>
