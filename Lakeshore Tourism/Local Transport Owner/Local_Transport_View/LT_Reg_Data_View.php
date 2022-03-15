<html>
    <body>
        
         <form action = "" method = "POST">
             <h2> Local Transport company info...  </h2>
             <br>
         <table>
             <tr>
                <?php
                session_start();

                    $data = file_get_contents('Registration.json');
                    $regdata = json_decode($data);

                    foreach($regdata as $myobject)
                    {   
                        if( $_SESSION["email"] == $myobject -> email)
                        {
                            foreach($myobject as $key => $value)
                            {
                                echo $key.": " .$value."<br>";
                            }    
                        }
                        break;
                    }
                ?> 

             </tr>
        </table>
    </body>
 </html>