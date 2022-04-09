<?php

session_start();
if (session_destroy())
{
    header('location: ../Admin_View/adminlogin.php');
}
?>