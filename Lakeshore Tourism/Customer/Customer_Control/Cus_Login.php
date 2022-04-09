<?php
session_start();

if (isset($_POST["login"]))
{
    $email = $_POST ["email"];
    $password = $_POST["pass"];
    $data = file_get_contents("../../json/customer.json");
    $mydata = json_decode($data);
    
    foreach($mydata as $myobject)
    {   if($email == $myobject->email && $password == $myobject->password)
        {
             
            foreach($myobject as $key=>$value)
            {
                $_SESSION["email"]=$email;
                $_SESSION["pass"]=$password;
                header("location: ../Customer_View/Cus_Home.php");
            }
            break;         
   
        }
        else
        {
            echo "Log in Credential didn't match";
        break;
        }       
    }
      
}

if (isset($_SESSION["email"]))
{
    header("location:../Customer_View/Cus_Home.php");
}


?>