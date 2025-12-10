<html>
    <body>
        <?php
        $name=$email=$dob=$gender=$degree=$bloodgroup="";
        if ($_SERVER["REQUEST_METHOD"]== "POST"){
            if(empty($_POST["name"])){
                $name="NAME IS REQUIRED";
            } else{
                
            $name=test_input($_POST["name"]);
            }
            if(empty($_POST["email"])){
                $email= "EMAIL IS REQUIRED";
            }else{
                $email=test_input($_POST["email"]);
            }
            if(empty($_POST["dob"])){
                $dob="DATE OF BIRTH";
            }else{
                $dob=test_input($_POST["dob"]);
            }
            if(empty($_POST["gender"])){
                $gender= "GENDER IS REQUIRED";
            }else{
                
            $gender=test_input($_POST["gender"]);

            }
            if(empty($_POST["degree"])){
                $gender= "Degree IS REQUIRED";
            }else{
                
            $degree=test_input($_POST["degree"]);

            }
            if(empty($_POST["bloodgroup"])){
                $gender= "BLOOD GROUP IS REQUIRED";
            }else{
                
                $bloodgroup=test_input($_POST["bloodgroup"]);

            }
            
            

        }
        function test_input($data){
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
                }
        ?>
        <h2>ASSESSMENT TASK</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 name>1. NAME</h1>
            <input type="text" name="name"><br><br> 
            <input type="submit" name="submit">
            <h1 email>2. EMAIL</h1>
            <input type="text" name="email"><br><br> 
            <input type="submit" name="submit">
            <h1 dob>3. DATE OF BIRTH</h1>
            <input type="date" name="dob" value=""/><br><br>
            <input type="submit" name="" value="submit"/><br><br>
            <h1 gender>4. GENDER</h1>
            <input type="radio" name="gender" value="Male">Female
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Female<br><br>
            <input type="submit" name="submit" value="submit">
            <h1 degree>5. DEGREE</h1>
            <input type="radio" name="degree" value="SSC">SSC
            <input type="radio" name="degree" value="HSC">HSC
            <input type="radio" name="degree" value="BSc">BSc
            <input type="radio" name="degree" value="BSc">MSc
            <br><br>
            <input type="submit" name="submit" value="submit">
            <h1 bloodgroup>6. BLOOD GROUP</h1>
            <select bloodgroup="">
                    <option value="">AB+</option>
                    <option value="">AB-</option>
                    <option value="">B+</option>
                    <option value="">B-</option>
                    <option value="">A+</option>
                    <option value="">A-</option>
            </select>
            <input type="submit" name="submit" value="submit">

            
            
        </form>
    </body>
</html>
