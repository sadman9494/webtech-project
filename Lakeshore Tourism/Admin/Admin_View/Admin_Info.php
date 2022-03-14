<html>
    <body>
         <?php
          session_start();
        ?>

        <table>
            <tr>
                welcome <?php echo $_SESSION["uname"];?>
            </tr>
            <tr>
                
                <td> <a href = "Admin_Update.php ">Update personal information</td>
            </tr>
            <tr>
                <td>personal information</td>
                
            </tr>
            
        </table>
