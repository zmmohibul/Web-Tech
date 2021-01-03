<form action="" id="login-form">
        <div class="form-group px-2">
            <label for="email">Email</label>
            <input autocomplete="off" type="text" name="email" id="email" class="form-control"
                placeholder="Enter Email">
            <span id="emailErr" class="hidden err"></span>
        </div>
        <div class="form-group col px-2">
            <label for="password">Password</label>
            <input autocomplete="off" type="password" name="password" id="password" class="form-control">
            <span id="passwordErr" class="hidden err"></span>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Login</button>
        <a class="btn btn-primary btn-lg" href="http://localhost/farmfood/views/loginRegister/register.php" role="button">Create New Account</a>
</form>
