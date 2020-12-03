<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/headData.php' ?>
        
    </head>
    <body>
        <?php include '../controllers/loginValidation.php' ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <table>
                <tr>
                    <th rowspan="3">Login <a href="http://localhost/lab-task-6/views/home.php" class="block-display">Back to Home</a></th>
                    <td>
                        <label for="email">User Email: <span class="red"><?php echo $emailErr ?></span></label>
                        <input type="text" name="email" id="" placeholder="Enter Email" value="<?php echo $email ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">User Password: <span class="red"><?php echo $passwordErr ?></label>
                        <input type="password" name="password" id="" placeholder="Enter Password"value="<?php echo $password ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="loginSubmit" id="">
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