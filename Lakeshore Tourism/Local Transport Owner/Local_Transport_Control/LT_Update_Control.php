<?php
    $companyNameerr = $firstnameerr = $lastnameerr = $phnNumbererr = $totalDrivererr = $emailerr = $passworderr = $confirmPassworderr = " ";

    if(isset($_POST["UPDATE"]))
    {
        $companyName = $_POST["companyName"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phnNumber = $_POST["phnNumber"];
        $totalCar = $_POST["totalCar"];
        $totalDriver = $_POST["totalDriver"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        $flag = true;

           if(strlen($companyName)<5)
            {
                $companyNameerr = "please enter a valid Company name";
                $flag = false;
            }

            
            if(strlen($firstName)<5)
            {
                $firstNameerr = "please enter a valid firstName";
                $flag = false;
            }


            
            if(strlen($lastName)<5)
            {
                $lastNameerr = "please enter a valid lastName";
                $flag = false;
            }

 
            if(!preg_match("/^[0-9]{11}$/", $phnNumber)) 
            {
                echo "please enter a valid Phone number";
                $flag = false;
            }


            if($totalDriver != $totalCar)
            {
                $totalDrivererr = "Invalid driver number";
                $flag = false;
            }



            if(strlen($email)<5)
            {
                $emailerr = "please enter a valid email";
                $flag = false;
            }


            
            if(strlen($password)<8)
            {
                echo "please enter a valid password";
                $flag = false;
            }


            if($confirmPassword != $Password)
            {
                echo "Password does not match";
                $flag = false;
            }


            if($_FILES["file"]["type"] == "image/jpeg")
            {
                if(move_uploaded_file($_FILES["file"]["tmp_name"], "../../image/".$companyName.date("y-m-d").".jpeg"))
                {
                    echo "File Uploaded";
                    include "LT_Registration_json.php";
                    
                }
                else
                {
                    echo "Upload failed";
                    $flag = false;
                }
            }
            else
            {
                echo "<br>";
                echo "Specified file is not an image";
                $flag = false;
            }
            
            if($flag == true)
            {
                header("location: ../Local_Transport_View/LT_Home.php");
            }
    }
 
 ?>