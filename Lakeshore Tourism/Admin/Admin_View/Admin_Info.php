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
                <td>Personal information</td>
                
                
            </tr>
            <tr><td>
                <?php $data = file_get_contents("Admin.json");
	             $mydata = json_decode($data);

    
	            foreach($mydata as $key=>$value)
	              {
		         echo "your ".$key." is ".$value."<br>";
	            } ?> 
            </td></tr>
            
        </table>
