<?php

$namerr = $agerr =$numerr=$emperr=" ";
if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $number = $_POST["number"];
    
    if (empty($name) || empty ($age)|| empty ($number)|| !isset($_POST["designation"]))
    {
        $emperr = "fiil";
    }
    else 
     {
         if (strlen($name)<3)
         {
             $namerr= "please give a valid name ";
         }
         echo "<br>";

         if ($age<18 || $age >40)
         {
             $agerr= "please give a valid age";
         }
         echo "<br>";
         if (strlen($number)<11 || strlen($number)>11)
         {
             $numerr = "please give a valid number";
         }
         echo "<br>";


     }
     
}
 
?>