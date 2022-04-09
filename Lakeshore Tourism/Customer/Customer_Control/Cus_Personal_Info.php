<?php
session_start();
$data = file_get_contents("../../json/customer.json");
$mydata = json_decode($data);
    
    
        foreach($mydata as $myobject)
        {   
            if($_SESSION["email"] == $myobject ->email )
            {
              foreach($myobject as $key=>$value)
            {
                echo $key.":".$value."<br>";
            }
             break;
            }
    }
?>