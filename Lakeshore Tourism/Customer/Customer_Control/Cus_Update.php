<?php
$Nameerr = $phnNumbererr = $Ageerr = $emailerr = $passworderr = $confirmPassworderr = $allemperr = "";
$flag=1;

if(isset($_POST["submit"]))
{
    $Name = $_POST["name"];
    $phnNumber = $_POST["phnNumber"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confirmPassword = $_POST["confirmPass"];

    if(empty($Name)||empty($phnNumber)||empty($email)||empty($password)||empty($confirmPassword))
    {
        $allemperr = "EMPTY Fields, PLease Fill Up!";
        $flag=0;
        
    }
   
    else
    {
        $string = 'invalid';
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string))
        {
            $Nameerr = "Enter a valid name";
            $flag=0;
        }
       
        if(!preg_match("/^[0-9]{11}$/", $phnNumber)) 
        {
            $phnNumbererr = "please give a valid number";
            $flag=0;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
        $emailerr = "Invalid email format";
        $flag=0;
        }
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$specialChars || strlen($password) < 6) 
        {

            $passworderr="Password must have one upper case, one lower case, one special character";
            $flag=0;
        }
        if($password!=$confirmPassword)
        {
            $confirmPassworderr="Password didn't match";
            $flag=0;
        }
    }
    
    if($flag==1)
    {
        $formdata = array(
            'username'=> $_POST["name"],
            'phoneNumber' => $_POST["phnNumber"],
            'email'=> $_POST["email"],
            'password'=> $_POST["pass"]
           
         );
         $existingdata = file_get_contents('../../json/customer.json');
         $tempJSONdata = json_decode($existingdata);
         $tempJSONdata[] =$formdata;
         //Convert updated array to JSON
         $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
         
         //write json data into data.json file
         if(file_put_contents("../../json/customer.json", $jsondata)) 
         {
              echo "Data successfully saved <br>";
          }
         else 
              echo "no data saved";
    header("location: ../Customer_View/Cus_Login.php");
    }
}
?>