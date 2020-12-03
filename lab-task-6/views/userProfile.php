<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'includes/headData.php' ?>
    </head>
    <body>
        <table style="width:80%">
        <tr>
            <td><a href="">Dashboard</a></td>
            <th rowspan="5">
                <?php session_start() ?>
                <?php if(isset($_SESSION['loggedin'])): ?>
                    <?php if($_SESSION['loggedin']): ?>
                        Welcome <?php echo $_SESSION['first_name'] ?>
                    <?php else: ?>
                        Welcome User
                    <?php endif ?>
                <?php endif ?>
            </th>
        </tr>
        <tr>
            <td><a href="">View Profile</a></td>
        </tr>
        <tr>
            <td><a href="">Edit Profile</a></td>
        </tr>
        <tr>
            <td><a href="">Change Password</a></td>
        </tr>
        <tr>
            <td><a href="unsetSessions.php">Logout</a></td>
        </tr>
        </table>
    </body>
</html>