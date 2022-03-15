<?php
    session_start();
    $cookie_name = "Dear_User";
    $cookie_value = $_SESSION["email"];

    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");


    if(!isset($_COOKIE[$cookie_name])) 
    {
        echo "This is your first visit...";
        echo "<br>";
    } 
    else 
    {  
        echo "Welcome " . $_COOKIE[$cookie_name];
        echo "<br>";
    }


    if (!isset($_SESSION["email"]))
    {
        header('location: LT_Login.php');
    }
?>

<html>
    <body> 
        <?php
            include '../../Header.php';    
        ?>           
        <h2 align = "center"> Local Transport Home <h2>
            <form action = "" method = "post">
                <table  align ="center">
                    <tr>
                        <td><td> <a href = "LT_Reg_Data_View.php"> General Information </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Car List </td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Driver List </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Trip History </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Financial Information </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "LT_Update.php"> Update Information </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td><a href = "../Local_Transport_Control/Logout.php"> LOG OUT</td></td>
                    </tr>
                </table>

                <?php
                    include '../../Footer.php';
                ?>
            </from>
    </body>
</html>