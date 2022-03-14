<?php
    $companyNameerr = $firstnameerr = $lastnameerr = $phnNumbererr = $emailerr = $passworderr = $confirmPassworderr = $allemperr = "";
    $companyName = $_POST["companyName"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phnNumber = $_POST["phnNumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if(isset($_POST["submit"]))
    {
        if(empty($companyName)||empty($firstname)||empty($lastname)||empty($phnNumber)||empty($email)||empty($password)||empty($confirmPassword))
        {
            $allemperr = "No fields can be empty";
        }
        else
        {
            if(empty($firstname)||strlen($firstname)<5)
            {
                $firstnameerr = "please enter a valid Company name";
            }
        }
        
        else 
        {
            echo "your first name is ".$ucname;
        }
        echo "<br>";

        
        if(empty($ufname)||strlen($ufname)<5)
        {
            echo "please enter a valid firstname";
        }
        else 
        {
            echo "your first name is ".$ufname;
        }
        echo "<br>";

        
        if(empty($ulname)||strlen($ulname)<5)
        {
            echo "please enter a valid lastname";
        }
        else 
        {
            echo "your last name is ".$ulname;
        }
        echo "<br>";

        
        if (empty($age))
        {
            echo "please enter a valid age";
        }
        else 
        {
            echo "your age is ".$age;
        }

        echo "<br>";

        if (isset($_POST["radio"]))
        {
            echo "your designation is ".$_POST["radio"];
        }
        else
        {
            echo " you have not selected any radio button";
        }
        echo "<br>";

        if (isset($_POST["language1"])||isset($_POST["language2"])||isset($_POST["language3"]))
        {
            echo "you have selected ";
            if (isset($_POST["language1"]))
            {
                echo $_POST["language1"];
                echo ", ";
            }
            if (isset($_POST["language2"]))
            {
                echo $_POST["language2"];
                echo ", ";
            }
            if (isset($_POST["language3"]))
            {
                echo $_POST["language3"];
                echo ", ";
            }
            if (isset($_POST["language4"]))
            {
                echo $_POST["language4"];
                echo " ";
            }

        }
        else
        {
            echo "you have not selected any checkbox";
        }
        echo "<br>";

        
        if(empty($uemail)||strlen($uemail)<5)
        {
            echo "please enter a valid email";

        }
        else 
        {
            echo "your email is ".$uemail;
        }
        echo "<br>";

        
        if(empty($upass)||strlen($upass)<5)
        {
            echo "please enter a valid password";

        }
        else 
        {
            echo "your password is successfully submitted";
        }
        echo "<br>";


        if($_FILES["file"]["type"] == "text/plain" && $_FILES["file"]["size"] < 10*1024)
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
        }

    }

        $preffered_Language = array();
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

 
 ?>