<?php

session_start();

$cookie_name = "username";
$cookie_value = $_SESSION["uname"];

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
 
  echo "Value is: " . $_COOKIE[$cookie_name];
}


   
   if (!isset($_SESSION["uname"]))
   {
       header('location: adminlogin.php');
   }
   
?>
<html>
    <body>
            
            <?php 
            require '../../Header.php';?>
            <h3><?php
            echo "Welcome Home, " .$_SESSION["uname"];
            
            ?>  </h3>
        <h2 align ="center"> Admin Home <h2>
            
                <table  align ="center">
                 <tr>
                    <td><a href = "../Admin_View/Admin_Info.php">Admin Info</td>
                    <td><td><a href = "../Package_View/Create_Package.php"> Create Packages<td></td><td></td><td></td><td></td><td></td><td></td>
                    <td><td> <a href = "../Package_View/Packages.php">Packages<td></td><td></td><td></td><td></td><td></td><td></td>
                    <td><td> <a href= "../Admin_Control/Admin_Logout.php"> Log Out </td></td>
                 </tr>
                 <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    
                    <td><h4> All Hotels </h4></td>
                    <br>
                    <br>
                </tr>
                <tr>
                    <td> Hotel 1</td>
                    <td> Hotel 2</td>
                    <td> Hotel 3</td>
                </tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr>
                    
                    <td> <h4>All Local Transport</h4></td>
                    
                </tr>
                <tr>
                    <td> Local Transport 1</td>
                    <td> Local Transport 2</td>
                    <td><td> Local Transport 3</td></td>
                </tr>

                </table>
               
                <?php
                 include '../../Footer.php';
                ?>
            </from>
    </body>
</html>