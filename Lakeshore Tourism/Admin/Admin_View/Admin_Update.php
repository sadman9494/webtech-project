<html>
    <body>
        <?php
        include '../../Header.php';
         include '../Admin_Control/Admin_Update_Process.php';
        ?>
         <br> <br> <br><br>
        <h2 align = "center">Update Information</h2>
        <form action ="" method = "POST" enctype="multipart/form-data">
        <table align = "center">
        <tr>
                <td> Name</td>
                <td> <input type ="text" name = "name">
                <?php echo $namerr;?></td>
            </tr>
            <tr>
                <td> Age</td>
                <td> <input type ="text" name = "age" min  = "18" max ="40">
                <?php echo $agerr;?></td>
            </tr>
            <tr>
                <td> Phone number</td>
                <td> <input type ="text" name = "number">
                <?php echo $numerr;?></td>
            </tr>
            <tr>
                <td> Designation</td>
                <td> <input type="radio" name = "designation" value = "Senior Developer"> Senior Developer
                 <input type="radio" name = "designation" value = "Junior Developer"> Junior Developer</td>
            </tr>
            
            <tr> 
            <td> <input type = "submit" name = "submit" value = "update"</td>
            <td><a href = "Admin_Home.php">Go to Home</td>
            </tr>
            <tr>
            <td><?php echo $emperr;?></td>
            </tr>
        </table>
         <?php
         include '../../Footer.php';
         ?>
        </form>

        

    </body>
</html>
