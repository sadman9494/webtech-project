<?php
    session_start();

    if(session_destroy())
    {
        header('location: ../Local_Transport_View/LT_Login.php');
    }

?>