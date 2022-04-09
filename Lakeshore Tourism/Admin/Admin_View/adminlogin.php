<html>
    <body>
        <?php
        session_start();
        if (isset($_SESSION["uname"]))
        {
            header('location: Admin_Home.php');
        }
        include '../../Header.php';
        ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
        <h2 align ="center"> Admin Login <h2>
            <form action = "" method = "post">
                <table  align ="center">
                 <tr>
                    <td> <b>Username:</b> </td>
                    <td> <input type = "text" name = "uname"> </td>
                 </tr>
                 <tr> 
                     <td><b> Password :</b></td>
                    <td> <input type = "password" name = "password"></td>
                </tr>
                <tr align = "right">
                    <td ><input type = "submit" name = "login" value = "Login"></td>
                    <td> <a href = "../../Home/view/home.php"> Main Home </td>
                    
                    
                </tr>
                

                </table>
                <?php
                 include '../Admin_Control/Admin_Login.php';
                ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <?php
                 include '../../Footer.php';
                ?>
            </from>
    </body>
</html>