<html>
    <body> 
        <?php
        include '../../Header.php';
        include '../Customer_Control/Cus_Login.php';
        ?>           
        <h2 align = "center"> Customer Login <h2>
            <form action = "" method = "post">
                <table  align ="center">
                 <tr>
                    <td> <b>Email :</b> </td>
                    <td> <input type = "text" name = "email"> </td>
                 </tr>
                 <tr> 
                     <td><b> Password :</b></td>
                    <td> <input type = "password" name = "pass"></td>
                </tr>
                <tr align = "center">
                   <td> <td><input type = "submit" name = "login" value = "Login"></td></td>     
                </tr>
                <tr align = "center">
                    <td><td>Not yet regitered? <a href = "Cus_Registration.php"> Sign Up </td></td>
                </tr>

                </table>

                <?php
                 include '../../Footer.php';
                ?>
            </from>
    </body>
</html>