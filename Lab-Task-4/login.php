<?php require_once 'requires/header.php'; ?>
	<h1>Login page</h1>
    <div id="login">
        <form action="user-profile/dashboard.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <label for="username">Username: </label>
                <input type="text" name="name" id="username">
                <br>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
                <br>
                <hr>
                <input type="submit" name="" id="">
                <a href="forgotpass.php">Forgot Password</a>
            </fieldset>
        </form>
    </div>
<?php require_once 'requires/footer.php'; ?>
	