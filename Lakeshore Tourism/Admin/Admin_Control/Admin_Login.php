<?php
//session_start();

if (isset($_POST["login"]))
{
    $uname = $_POST ["uname"];
    $password = $_POST["password"];
   if ($uname == "Admin" && $password == 123)
    {
        $_SESSION["uname"] = $uname;

      header("location: ../Admin_View/Admin_Home.php");
    }
   else 
     echo " You are not a valid user";
    
}
?>