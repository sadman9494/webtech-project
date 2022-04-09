<html>
<body>
<?php

include '../../Header.php';
include '../Customer_Control/Cus_Logout.php';

$cookie_name = "username";
$cookie_value = $_SESSION["email"];

setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");


if(!isset($_COOKIE[$cookie_name])) 
{
  echo "Welcome on your first day ! ";
  echo "<br>";
} 
else {
  echo "Value is: " . $_COOKIE[$cookie_name];
  echo "<br>";
}




$data = file_get_contents("../../json/customer.json");
$mydata = json_decode($data);
    
    
        foreach($mydata as $myobject)
        {   
            if($_SESSION["email"] == $myobject ->email )
            {
            echo "<b>Welcome, <b>".$myobject->username."<br>";
            }
    }

if (!isset($_SESSION["email"]))
{
    header("location:../../Home/view/home.php");
}


?>
        
        <form action = "" method = "post">

                <table  align ="center">
                    <tr>
                        <td> <a href= "Cus_update.php"> Update Information </td>
                    </tr>
                    <tr>
                        <td> <a href= "Cus_Personal_Info.php"> Personal Information </td>
                    </tr>
                 <tr>
                    <td> <h2 align = "left"> Our Packages <h2> </td>
                    
                 </tr>
                 <tr>
                 <td> Package 1 </td> <td> Package 2 </td> <td> Package 3 </td>
                </tr>
                 <tr>
                    <td> <h2 align = "left"> Reccomended Hotel <h2> </td>   
                 </tr>
                 <tr>
                 <td> Hotel 1 </td> <td> Hotel 2 </td> <td> Hotel 3 </td>
                </tr>
                 <tr>
                    <td> <h2 align = "left"> Reccomended Transport <h2> </td>
                </tr>  
                <tr>
                    <tr>
                 <td> Transport 1 </td> <td> Transport 2 </td> <td> Transport 3 </td>
                </tr>

                <tr>
                <td> <h2 align = "left"> Search Hotel/Transport :  <h2> </td>
                <td> <input type = "text" name = "search"> </td>
                </tr>
                <tr align="center">
                    <td><td><input type="submit" name="logout" value="logout"></td></td>
                </tr>

                </table>

                <?php
                 include '../../Footer.php';
                ?>
            </from>
    </body>
</html>