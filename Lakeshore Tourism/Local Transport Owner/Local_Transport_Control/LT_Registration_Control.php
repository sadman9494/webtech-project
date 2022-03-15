<?php
    $companyNameerr = $firstnameerr = $lastnameerr = $phnNumbererr = $totalDrivererr = $emailerr = $passworderr = $confirmPassworderr = $fileerr = $allemperr = " ";

    if(isset($_POST["SUBMIT"]))
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

        if(empty($companyName)||empty($firstName)||empty($lastName)||empty($phnNumber)||empty($email)||empty($password)||empty($confirmPassword))
        {
            $allemperr = "No fields can be empty";
            $flag = false;
        }
        else
        {
            if (!preg_match("/^[a-zA-Z-' ]*$/",$companyName))
            {
                $companyNameerr = "please enter a valid Company name";
                $flag = false;
            }

            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName))
            {
                $firstNameerr = "please enter a valid firstName";
                $flag = false;
            }


            
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName))
            {
                $lastNameerr = "please enter a valid lastName";
                $flag = false;
            }

 
            if(!preg_match("/^[0-9]{11}$/", $phnNumber)) 
            {
                $phnNumbererr = "please enter a valid Phone number";
                $flag = false;
            }


            if($totalDriver != $totalCar)
            {
                $totalDrivererr = "Invalid driver number";
                $flag = false;
            }



            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $emailerr = "please enter a valid email";
                $flag = false;
            }


            
            if(strlen($password)<8)
            {
                echo "please enter a valid password";
                $flag = false;
            }


            if($confirmPassword != $password)
            {
                echo "Password does not match";
                $flag = false;
            }



            if($_FILES["file"]["type"] == "image/jpeg")
            {
                if(move_uploaded_file($_FILES["file"]["tmp_name"], "../../image/".$companyName.date("y-m-d").".jpeg"))
                {
                    echo "File Uploaded";    
                }
                else
                {
                   $fileerr = "Upload failed";
                    $flag = false;
                }
            }
            else
            {
                echo "<br>";
                $fileerr = "Specified file is not an image";
                $flag = false;
            }

            
        }
        if($flag == true)
        {
            include "LT_Registration_json.php";
            header("location: ../Local_Transport_View/LT_Home.php");
        }
        else
        {
            echo "Registration Unsuccessful...";
        }
        
        

    }


        

 
 ?>