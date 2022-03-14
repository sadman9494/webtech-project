<?php
    $companyNameerr = $firstnameerr = $lastnameerr = $phnNumbererr = $totalDrivererr = $emailerr = $passworderr = $confirmPassworderr = " ";

    if(isset($_POST["UPDATE"]))
    {
        $companyName = $_POST["companyName"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phnNumber = $_POST["phnNumber"];
        $totalCar = $_POST["totalCar"];
        $totalDriver = $_POST["totalDriver"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        $flag = true;

           if(strlen($companyName)<5)
            {
                $companyNameerr = "please enter a valid Company name";
                $flag = false;
            }

            
            if(strlen($firstName)<5)
            {
                $firstNameerr = "please enter a valid firstName";
                $flag = false;
            }


            
            if(strlen($lastName)<5)
            {
                $lastNameerr = "please enter a valid lastName";
                $flag = false;
            }

 
            if(!preg_match("/^[0-9]{11}$/", $phnNumber)) 
            {
                echo "please enter a valid Phone number";
                $flag = false;
            }


            if($totalDriver != $totalCar)
            {
                $totalDrivererr = "Invalid driver number";
                $flag = false;
            }



            if(strlen($email)<5)
            {
                $emailerr = "please enter a valid email";
                $flag = false;
            }


            
            if(strlen($password)<8)
            {
                echo "please enter a valid password";
                $flag = false;
            }


            if($confirmPassword != $Password)
            {
                echo "Password does not match";
                $flag = false;
            }

            if($flag == true)
            {
                header("location: ../Local_Transport_View/LT_Home.php");
            }
            



            /*if($_FILES["file"]["type"] == "text/plain" && $_FILES["file"]["size"] < 10*1024)
            {
                if(move_uploaded_file($_FILES["file"]["tmp_name"], "../Files/".$uname.date("y-m-d").".txt"))
                {
                    echo "File Uploaded";
                    echo "<br>";
                    echo $_FILES["file"]["name"];
                }
                else
                {
                    echo "Cannot upload the specified file";
                }
            }
            else
            {
                echo "Specified file is not a ".$_FILES["file"]["type"];
                echo "<br>";
            }*/
    
        
        

    }

       /* $preffered_Language = array();
            if(isset($_POST['language1'])){
                array_push($preffered_Language, $_POST['language1']);
            }
            if(isset($_POST['language2'])){
                array_push($preffered_Language, $_POST['language2']);
            }
            if(isset($_POST['language3'])){
                array_push($preffered_Language, $_POST['language3']);
            }
            if(isset($_POST['language4'])){
                array_push($preffered_Language, $_POST['language4']);
            }
    //Get form data
        $formdata = array(
            'firstName'=> $_POST["firstName"],
            'lastName'=> $_POST["lastName"],
            'Age'=> $_POST["age"],
            'Designation'=> $_POST["designation"],
            'Preffered Language'=> $preffered_Language,
            'email'=>$_POST["email"],
        );
        $existingdata = file_get_contents('Data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
        //Convert updated array to JSON
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        
        //write json data into data.json file
        if(file_put_contents("Data.json", $jsondata)) 
        {
            echo "\n\nData successfully saved <br>";
        }
        else
        {
            echo "\n\nno data saved";
        } 

        $data = file_get_contents("Data.json");
        $mydata = json_decode($data);

        echo $mydata;*/

 
 ?>