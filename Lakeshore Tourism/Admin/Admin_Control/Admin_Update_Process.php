<?php

$namerr = $agerr =$numerr=$emperr=" ";
$flag = 1;
if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $number = $_POST["number"];
    
    if (empty($name) || empty ($age)|| empty ($number)|| !isset($_POST["designation"]))
    {
        $emperr = "All boxes must be filled";
    }
    else 
     {
         if ($flag)
      {
         if (strlen($name)<3)
         {
             $namerr= "please give a valid name ";
             $flag =0;
         }
         echo "<br>";

         if ($age<18 || $age >40)
         {
             $agerr= "please give a valid age";
             $flag =0;
         }
         echo "<br>";
         
         if(!preg_match("/^[0-9]{11}$/", $number)) {
            
             $numerr = "please give a valid number";
             $flag =0;
         }
         echo "<br>";

       }
       if ($flag==1)
       {
           include 'adminjson.php';

       }     

         

        

     }
     
}
 
?>