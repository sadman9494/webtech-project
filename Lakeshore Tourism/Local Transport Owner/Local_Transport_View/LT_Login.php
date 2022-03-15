<html>
    <body> 
        <?php
            include '../../Header.php';
            include "../Local_Transport_Control/LT_Login_Control.php";
        ?>           
        <h2 align = "center"> Company Login <h2>
            <form action = "" method = "post">
                <table  align ="center">
                    <tr>
                        <td> <b>Email:</b> </td>
                        <td> <input type = "text" name = "email"> </td>
                    </tr>
                    <tr> 
                        <td><b> Password :</b></td>
                        <td> <input type = "password" name = "password"></td>
                    </tr>
                    <tr align = "center">
                        <td><td><input type = "submit" name = "LOGIN" value = "LOGIN"></td></td>     
                    </tr>
                    <tr align = "left">
                        <td><td><a href = "LT_Registration.php"> Go to Registration Instead</td></td>
                    </tr>

                </table>

                <?php
                    include '../../Footer.php';
                ?>
            </from>
    </body>
</html>