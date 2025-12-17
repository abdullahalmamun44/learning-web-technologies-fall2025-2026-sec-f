<html>
    <body>
        <?php
        $name=$email=$dob=$gender=$degree=$bloodgroup="";
        $nameErr=$emailErr=$dobErr=$genderErr=$degreeErr=$bloodgroup="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($POST['Submit_name'])){
                if(empty($_POST["name"])){
                    $nameErr="Name is Required";
                }else
                {
                    $name=test_input($_POST["name"]);
            }
        }
            if(isset($_POST['submit_email'])){
                if(empty($_POST["email"])){
                    $emailErr="Email is required";       
                         }
            else{
                $email=test_input($_POST["email"]);
            }
        }
        if(isset($_POST['submit_gender'])){
            if(empty($_POST["gender"])){
                $genderErr="Gender is required";

            }
            else{
                $gender=test_input($_POST("gender"));
            }
        }
        if(isset($_POST['submit_degree'])){
            if(empty($_POST["degree"])|| count($_POST["degree"])!=2){
                $degreeErr="Please select exactly two degree";

            }else{
                $degree=test_input(implode(",",$_POST["degree"]));
            }
        }
        if(isset($_POST['submit_bloodgroup'])){
            if(empty($_POST["bloodgroup"])){
                $bloodgroupErr="Blood group is required";
            }else{
                $bloodgroup=test_input($_POST["bloodgroup"]);
            }
        }
    
        
    }
    function test_input($name){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

        
        ?>
    <h2>ASSESSMENT TASK</h2>
    <from method="post" action="<?php echo htmlspecialchars($_SERVER["PHP"])"
    </body>
</html>