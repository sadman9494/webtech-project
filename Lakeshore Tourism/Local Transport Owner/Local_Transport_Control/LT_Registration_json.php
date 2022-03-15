<?php

    $formdata = array(

            'companyName' => $_POST["companyName"],
            'firstName' => $_POST["firstName"],
            'lastName' => $_POST["lastName"],
            'phnNumber' => $_POST["phnNumber"],
            'totalCar' => $_POST["totalCar"],
            'totalDriver' =>$_POST["totalDriver"],
            'email' => $_POST["email"],
            'password' => $_POST["password"],
            'confirmPassword' => $_POST["confirmPassword"]
        );
        $existingdata = file_get_contents('Registration.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        
        if(file_put_contents("Registration.json", $jsondata)) 
        {
            echo "\n\nData successfully saved <br>";
        }
        else
        {
            echo "\n\nno data saved";
        } 

?>