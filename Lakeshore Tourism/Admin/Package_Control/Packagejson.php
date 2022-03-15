<?php
   $pdata = array (
       'pname' => $_POST["pname"],
       'location' => $_POST["location"],
       'day' => $_POST["day"],
       'price' => $_POST["price"],
   );
     $existingdata = file_get_contents('data.json');
     $tempdata = json_decode($existingdata);
     $tempdata[] = $pdata;
     $updatejson = json_encode($tempdata , JSON_PRETTY_PRINT);

     if (file_put_contents('data.json',$updatejson))
     {
         echo "Data has been saved successfully <br>";
     }

     else 
     { 
         echo "unable to save data";
     }
     
?>