<?php
   $formdata = array(
       'name'=> $_POST["name"],
       'age' => $_POST["age"],
       'number'=> $_POST["number"],
       'designation'=> $_POST["designation"],
   );
  
       
       
	   $jsondata = json_encode($formdata, JSON_PRETTY_PRINT);
	   
	   
	   if(file_put_contents("Admin.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

    
	
	





 
 ?>