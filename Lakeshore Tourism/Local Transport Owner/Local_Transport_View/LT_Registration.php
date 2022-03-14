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
            <td><input type ="text" name = "firstName" > </td>
        </tr>
        <tr>
            <td>Last name: </td>
            <td><input type = "text" name = "lastName"></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td><input type = "text" name = "phnNumber"></td>
        </tr>
        <tr>
            <td>Total Cars: </td>
            <td><input type = "number" name = "totalCar" min ="1" max ="100"></td>
        </tr>
        <tr>
            <td>Total Driver: </td>
            <td><input type = "number" name = "totalDriver" min ="1" max ="100"></td>
        </tr>
        <tr>
            <td>Location: </td>
            <td><input type = "text" name = "location"></td>
        </tr>
        <tr>
            <td>Eamil :</td> 
            <td><input type ="text" name = "email" ></td>  
        </tr>
        <tr>
            <td>Password :</td> 
            <td><input type ="password" name = "password"  ></td> 
        </tr>
        <tr>
            <td>Confirm Password :</td> 
            <td><input type ="password" name = "confirmPassword"  ></td> 
        </tr>
        <tr>  
            <td>Please choose a file :</td>  
            <td><input type = "file" name = "file"> </td> 
        </tr>
        <tr>
            <td><input type = "submit" name = "submit"> </td> 
            <td><input type = "reset"></td> 
        </tr>
    </table>
    </from>
    <?php
        include '../../Footer.php';
    ?>
</body>
</html>