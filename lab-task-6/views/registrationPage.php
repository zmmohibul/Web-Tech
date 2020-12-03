<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/headData.php' ?>
        <style>
            * {
                font-size: 105%;
            }
        </style>
        
    </head>
    <body>
        
        <?php include '../controllers/addUser.php' ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <table>
                <tr>
                    <th rowspan="8">Registration <a href="http://localhost/lab-task-6/views/home.php" class="block-display">Back to Home</a></th>
                    <td>
                        <label for="email">User Email: <span class="red block-display"><?php echo $emailErr ?></span></label>
                        <input type="text" name="email" class="right" id="" placeholder="Enter Email" value="<?php echo $email ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">User Password: <span class="red block-display"><?php echo $passwordErr ?></label>
                        <input type="password" name="password" class="right" id="" placeholder="Enter Password"value="<?php echo $password ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="confirmPass">Confirm Password: <span class="red block-display"><?php echo $passwordErr ?></label>
                        <input type="password" name="confirmPass" class="right" id="" placeholder="Confirm Password"value="<?php echo $confirmPass ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="first_name">First Name: <span class="red block-display"><?php echo $firstNameErr ?></label>
                        <input type="text" name="first_name" class="right" id="first_name" placeholder="Enter First Name"value="<?php echo $first_name ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="last_name">Last Name: <span class="red block-display"><?php echo $lastNameErr ?></label>
                        <input type="text" name="last_name" class="right" id="last_name" placeholder="Enter Last Name"value="<?php echo $last_name ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address">User Address: <span class="red block-display"><?php echo $addressErr ?></label>
                        <input type="text" name="address" class="right" id="address" placeholder="Enter Address"value="<?php echo $address ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Phone Number: <span class="red block-display"><?php echo $phoneErr ?></label>
                        <input type="text" name="phone" class="right" id="phone" placeholder="Phone Number"value="<?php echo $phone ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="registrationSubmit" id="">
                    </td>
                </tr>
                <?php if (isset($err)): ?>
                    <tr>
                        <td colspan="2" class="red">*<?php echo $err ?> </td>
                    </tr>
                <?php endif ?>
                
            </table>
        </form>
    </body>
</html>