<html>
    <body>
        
         <form action = "" method = "POST">
         <table>
             <tr>
                <?php
                 $data = file_get_contents('data.json');
                 $packdata = json_decode($data);
                 
                 foreach ($packdata as $p)
                 {
                     foreach ($p as $key=>$value)
                     {
                         echo $key.":" .$value."<br>";
                     }
                     echo "<br>";
                 }
                ?>               
             </tr>
             <tr>
                <td> <a href = "../Admin_View/Admin_Home.php">Back to Home</td>
             </tr>
        </table>
    </body>
 </html>
