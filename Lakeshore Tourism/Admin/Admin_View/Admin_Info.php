<html>
    <body>
         <?php
          session_start();
          require '../../Header.php';
        ?>
          <br> <br><br> <br><br> 
        <table>
            <tr>
               <h3> welcome <?php echo $_SESSION["uname"];?></h3>
            </tr>
            <tr>
                
                <td> <a href = "Admin_Update.php ">Update personal information</td>
                <td><td><td> <a href= "../Admin_Control/Admin_Logout.php"> Logout</td></td></td>
                <td><td><a href = "Admin_Home.php">Go to Home</td></td>
            </tr>
            <tr>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <td>Personal information</td>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                
            </tr>
            <tr><td>
                <?php $data = file_get_contents("Admin.json");
	             $mydata = json_decode($data);

    
	            foreach($mydata as $key=>$value)
	              {
		         echo $key." : ".$value."<br>";
	            } ?> 
            </td></tr>
            
        </table>
        <?php 
           include '../../Footer.php';
        ?>
            </body>
            </html>
