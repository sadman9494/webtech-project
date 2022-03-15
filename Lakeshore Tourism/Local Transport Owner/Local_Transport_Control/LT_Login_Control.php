<?php
    session_start();

    if (isset($_POST["LOGIN"]))
    {
        $email = $_POST ["email"];
        $password = $_POST["password"];
        $data = file_get_contents('Registration.json');
        $regdata = json_decode($data);

        foreach($regdata as $myobject)
        {   
            if($email == $myobject -> email && $password == $myobject -> password)
            {

                foreach($myobject as $key => $value)
                {
                    $_SESSION["email"] = $email;
                    $_SESSION["pass"] = $password;
                    header("location: ../Local_Transport_View/LT_Home.php");
                }
                break;
            }
            else
            {
                echo "Log in unsuccessfull";
                break;
            }
        }

    }

    if(isset( $_SESSION["email"]))
    {
        header("location: ../Local_Transport_View/LT_Home.php");
    } 
?>