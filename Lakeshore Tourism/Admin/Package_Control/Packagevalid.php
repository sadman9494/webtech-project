<?php

$namerr = $locerr =$dayerr=$emperr=$pricerr=" ";
$flag = 1;
if (isset($_POST["submit"]))
{
    $pname = $_POST["pname"];
    $location = $_POST["location"];
    $day = $_POST["day"];
    $price = $_POST["price"];
    
    if(empty($pname) || empty ($location)|| empty ($day)|| empty ($price))
    {
        $emperr = "All boxes must be filled";
    }
    else 
     {
         if ($flag)
      {
         if (strlen($pname)<3)
         {
             $namerr= "please give a valid package name ";
             $flag =0;
         }
         echo "<br>";

         if ((!preg_match("#^[a-zA-Z]+$#", $location)))
         {
             $locerr= "please give a valid location";
             $flag =0;
         }
         echo "<br>";
         
         if(!preg_match("/^[0-9]{2}$/", $day)) {
            
             $dayerr = "please give a valid duration time";
             $flag =0;
         }
         echo "<br>";
         if(!preg_match("/^[0-9]{4}$/", $price)) {
            
            $pricerr = "please give a valid price";
            $flag =0;
        }
        echo "<br>";

       }
       if ($flag==1)
       {
           include 'Packagejson.php';

       }     

         

        

     }
     
}
 
?>