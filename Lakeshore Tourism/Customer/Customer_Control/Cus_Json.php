<?php
$formdata = array(
    'username'=> $_POST["name"],
    'age'=>$_POST["age"],
    'phnNumber' => $_POST["phnNumber"],
    'email'=> $_POST["email"]
    'password'=> $_POST["pass"]
   
 );
 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 //Convert updated array to JSON
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 
 //write json data into data.json file
 if(file_put_contents("../../json/customer.json", $jsondata)) {
      echo "Data successfully saved <br>";
  }
 else 
      echo "no data saved";

$data = file_get_contents("data.json");
$mydata = json_decode($data);


//echo "my value: ".$mydata[1]->username;
	 foreach($mydata as $myobject)
{   if($username == $myobject ->username && $password == $myobject->password)
    {
         
        foreach($myobject as $key=>$value)
        {
            echo $key.$value;
        }
         break;


    }
    else{echo "Log in not successfull";}
    
   // echo "<h2> $myobject->username</h2> ";
//foreach($myobject as $key=>$value){echo "your ".$key." is ".$value."<br>";} 
}

}

?>