<html>
    
<body>
    <?php
        include "../../Header.php";
        include "../Local_Transport_Control/LT_Registration_Control.php";
    ?>
    <h2 align = "center">Company Registration</h2>

        <form method = "Post" enctype = "multipart/form-data">
        <table align = "center"> 
            <tr>
                <td> Company Name: </td>
                <td><input type ="text" name = "companyName" > 
                    <?php echo $companyNameerr;?> </td>
            </tr>
            <tr>
                <td> First Name: </td>
                <td><input type ="text" name = "firstName" > 
                    <?php echo $firstnameerr;?> </td>
            </tr>
            <tr>
                <td>Last name: </td>
                <td><input type = "text" name = "lastName">
                    <?php echo $lastnameerr;?> </td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><input type = "text" name = "phnNumber">
                    <?php echo $phnNumbererr;?> </td>
            </tr>
            <tr>
                <td>Total Cars: </td>
                <td><input type = "number" name = "totalCar" min ="1" max ="100">
            </tr>
            <tr>
                <td>Total Driver: </td>
                <td><input type = "number" name = "totalDriver" min ="1" max ="100"></td>
            </tr>
            <tr>
                <td>Location: </td>
                <td><input type = "text" name = "location">
            </tr>
            <tr>
                <td>Eamil: </td> 
                <td><input type ="text" name = "email" >
                    <?php echo $emailerr;?> </td>  
            </tr>
            <tr>
                <td>Password: </td> 
                <td><input type ="password" name = "password"  >
                    <?php echo $passworderr;?> </td> 
            </tr>
            <tr>
                <td>Confirm Password: </td> 
                <td><input type ="password" name = "confirmPassword"  >
                    <?php echo $confirmPassworderr;?> </td> 
            </tr>
            <tr>  
                <td>Upload Trade Licence: </td>  
                <td><input type = "file" name = "file"> 
                <?php echo $fileerr;?></td> 
            </tr>
            <tr align = "left">
                <td><td><input type = "submit" name = "SUBMIT"> </td></td>
            </tr> 
            <tr align = "left">
                <td><td><input type = "reset"> </td></td>
            </tr> 
            <tr align = "left">
                <td><td><a href = "LT_Login.php"> Go to Login Instead</td></td>
            </tr>
            <tr>
                <td><?php echo $allemperr;?> </td> 
            </tr>
        </table>
        </from>
    <?php
        include '../../Footer.php';
    ?>
</body>
</html>