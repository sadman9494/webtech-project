<?php
    session_start();

    if (isset($_POST["LOGIN"]))
    {
        $email = $_POST ["email"];
        $password = $_POST["password"];

        if ($email == "muhib970@gmail.com" && $password == 95123578)
        {
            $_SESSION["email"] = $email;

        header("location: ../Local_Transport_View/LT_Home.php");
        }
        else
        {
            echo " You are not a valid user";
        } 
    }
?>