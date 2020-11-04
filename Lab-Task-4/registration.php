<?php require_once 'requires/header.php'; ?>
	<h1 style="margin-bottom: 20px;">Registration Page</h1>

    <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $dateOfBirthErr = $degreeErr = $bloodGroupErr = "";
        $name = $email = $gender = $date = $month = $year = $degree = $bloodGroup = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["date"])) {
                $dateOfBirthErr = "Day number is required";
            } elseif (empty($_POST["month"])) {
                $dateOfBirthErr = "Month number is required";
            } elseif (empty($_POST["year"])) {
                $dateOfBirthErr = "Year number is required";
            } else {
                if($_POST["date"] > 31 || $_POST["date"] < 0) {
                    $dateOfBirthErr = "Day must be between 0 and 31";
                } elseif ($_POST["month"] > 12 || $_POST["month"] < 1) {
                    $dateOfBirthErr = "Month must be between 1 and 12";
                } elseif ($_POST["year"] > 2020 || $_POST["year"] < 1980) {
                    $dateOfBirthErr = "Year must be between 1980 and 2020";
                } else {
                    $date = $_POST["date"];
                    $month = $_POST["month"];
                    $year = $_POST["year"];
                } 
            }

            if (empty($_POST['degree'])) {
                $degreeErr = "Please select at least two degrees.";
            } elseif (count($_POST['degree']) < 2) {
                $degreeErr = "Please select at least two degrees.";
            } else {
                $degree = $_POST['degree'];
            }

            if (empty($_POST['blood'])) {
                $bloodGroupErr = "Please select a blood group.";
            } else {
                $bloodGroup = $_POST['blood'];
            }

        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

    <div id="registration">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <span class="red">* <?php echo $nameErr;?></span>
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="name" id="">
                <br>
                <hr>
            </fieldset>

            <span class="red">* <?php echo $emailErr;?></span>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" id="">
                <br>
                <hr>
            </fieldset>

            <span class="red">* <?php echo $dateOfBirthErr;?></span>
            <fieldset>
                <legend>Date of Birth</legend>
                <label for="date">&nbsp;&nbsp;dd</label>
                <input type="number" name="date" id="date" class="date">
                <br>
                <br>
                <label for="month">&nbsp;&nbsp;mm</label>
                <input type="number" name="month" id="month" class="date">
                <br>
                <br>
                <label for="year">&nbsp;&nbsp;yyyy</label>
                <input type="number" name="year" id="year" class="date">
                <br>
                <hr>
            </fieldset>
            
            <span class="red">* <?php echo $genderErr;?></span>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <br>
                <hr>
            </fieldset>

            <span class="red">* <?php echo $bloodGroup;?></span>
            <fieldset>
                <legend>Blood Group</legend>
                <select name="blood" id="">
                    <option value="A+">A<sup>+</sup></option>
                    <option value="A-">A<sup>-</sup></option>
                    <option value="B+">B<sup>+</sup></option>
                    <option value="B-">B <sup>-</sup></option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <br>
                <hr>
                <input type="submit" name="" id="">
            </fieldset>
        </form>
    </div>
<?php require_once 'requires/footer.php'; ?>
	