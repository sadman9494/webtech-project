<?php
    $companyNameerr = $firstnameerr = $lastnameerr = $phnNumbererr = $emailerr = $passworderr = $confirmPassworderr = $allemperr = " ";

    if(isset($_POST["submit"]))
    {
        $companyName = $_POST["companyName"];
        $firstname = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phnNumber = $_POST["phnNumber"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        if(empty($companyName)||empty($firstname)||empty($lastname)||empty($phnNumber)||empty($email)||empty($password)||empty($confirmPassword))
        {
            $allemperr = "No fields can be empty";
        }
        else
        {
            if(empty($companyName)||strlen($companyName)<5)
            {
                $companyNameerr = "please enter a valid Company name";
            }

            
            if(empty($firstname)||strlen($firstname)<5)
            {
                $firstnameerr = "please enter a valid firstname";
            }


            
            if(empty($lastname)||strlen($lastname)<5)
            {
                $lastnameerr = "please enter a valid lastname";
            }

 
            if(!preg_match("/^[0-9]{11}$/", $phnNumber)) 
            {
                echo "please enter a valid age";
            }


            if(empty($email)||strlen($email)<5)
            {
                $emailerr = "please enter a valid email";
            }


            
            if(empty($password)||strlen($password)<8)
            {
                echo "please enter a valid password";
            }


            if(empty($confirmPassword)||$confirmPassword != $confirmPassword)
            {
                echo "Password does not match!!!";
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
            'Firstname'=> $_POST["firstname"],
            'Lastname'=> $_POST["lastname"],
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

        echo $mydata;

 
 ?>*/