<html>
    <body>
        <?php
        $name = $email = $dob = $gender = $degree = $bloodgroup = "";
        $nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodgroupErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit_name'])) {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                }
            }

            if (isset($_POST['submit_email'])) {
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                }
            }

            if (isset($_POST['submit_dob'])) {
                if (empty($_POST["dob"])) {
                    $dobErr = "Date of birth is required";
                } else {
                    $dob = test_input($_POST["dob"]);
                }
            }

            if (isset($_POST['submit_gender'])) {
                if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }

            if (isset($_POST['submit_degree'])) {
                if (empty($_POST["degree"]) || count($_POST["degree"]) != 2) {
                    $degreeErr = "Please select exactly two degrees";
                } else {
                    $degree = test_input(implode(", ", $_POST["degree"]));
                }
            }

            if (isset($_POST['submit_bloodgroup'])) {
                if (empty($_POST["bloodgroup"])) {
                    $bloodgroupErr = "Blood group is required";
                } else {
                    $bloodgroup = test_input($_POST["bloodgroup"]);
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

        <h2>ASSESSMENT TASK</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>1. NAME</h1>
            <input type="text" name="name" value="<?php echo $name; ?>"><br>
            <span style="color: red;"><?php echo $nameErr; ?></span><br><br>
            <input type="submit" name="submit_name" value="Submit Name">
        </form>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>2. EMAIL</h1>
            <input type="text" name="email" value="<?php echo $email; ?>"><br>
            <span style="color: red;"><?php echo $emailErr; ?></span><br><br>
            <input type="submit" name="submit_email" value="Submit Email">
        </form>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>3. DATE OF BIRTH</h1>
            <input type="date" name="dob" value="<?php echo $dob; ?>"><br>
            <span style="color: red;"><?php echo $dobErr; ?></span><br><br>
            <input type="submit" name="submit_dob" value="Submit Date of Birth">
        </form>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>4. GENDER</h1>
            <input type="radio" name="gender" value="Male" <?php if (isset($gender) && $gender == "Male") echo "checked"; ?>>Male
            <input type="radio" name="gender" value="Female" <?php if (isset($gender) && $gender == "Female") echo "checked"; ?>>Female
            <input type="radio" name="gender" value="Other" <?php if (isset($gender) && $gender == "Other") echo "checked"; ?>>Other<br>
            <span style="color: red;"><?php echo $genderErr; ?></span><br><br>
            <input type="submit" name="submit_gender" value="Submit Gender">
        </form>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>5. DEGREE (Select Two)</h1>
            <input type="checkbox" name="degree[]" value="SSC" 
            <?php if (isset($degree) && strpos($degree, "SSC") !== false) echo "checked"; ?>>SSC
            <input type="checkbox" name="degree[]" value="HSC" 
            <?php if (isset($degree) && strpos($degree, "HSC") !== false) echo "checked"; ?>>HSC
            <input type="checkbox" name="degree[]" value="BSc"
             <?php if (isset($degree) && strpos($degree, "BSc") !== false) echo "checked"; ?>>BSc
            <input type="checkbox" name="degree[]" value="MSc" 
            <?php if (isset($degree) && strpos($degree, "MSc") !== false) echo "checked"; ?>>MSc
            <br>
            <span style="color: red;"><?php echo $degreeErr; ?></span><br><br>
            <input type="submit" name="submit_degree" value="Submit Degree">
        </form>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h1>6. BLOOD GROUP</h1>
            <select name="bloodgroup">
                <option value="">Select</option>
                <option value="AB+" <?php if ($bloodgroup == "AB+") echo "selected"; 
                ?>>AB+</option>
                <option value="AB-" <?php if ($bloodgroup == "AB-") echo "selected"; 
                ?>>AB-</option>
                <option value="B+" <?php if ($bloodgroup == "B+") echo "selected"; 
                ?>>B+</option>
                <option value="B-" <?php if ($bloodgroup == "B-") echo "selected"; 
                ?>>B-</option>
                <option value="A+" <?php if ($bloodgroup == "A+") echo "selected"; 
                ?>>A+</option>
                <option value="A-" <?php if ($bloodgroup == "A-") echo "selected"; 
                ?>>A-</option>
            </select><br>
            <span style="color: red;"><?php echo $bloodgroupErr; ?></span><br><br>
            <input type="submit" name="submit_bloodgroup" value="Submit Blood Group">
        </form>

    </body>
</html>
