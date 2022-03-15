<html>
    
<body>
    <?php
        include "../../Header.php";
        //include "LT_Home.php";
        include "../Local_Transport_Control/LT_Registration_Control.php";
    ?>
            <form action = "" method = "post">
                <table  align ="center">
                    <tr>
                        <td><td> <a href = "LT_Reg_Data_View.php"> General Information </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Car List </td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Driver List </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Trip History </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "#">Financial Information </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td> <a href = "LT_Update.php"> Update Information </td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><td><a href = "../Local_Transport_Control/Logout.php"> LOG OUT</td></td>
                    </tr>
                </table>
            </from>

    <h2 align = "center">Update Information</h2>

        <form method = "Post" enctype = "multipart/form-data">
        <table align = "center"> 
            <tr>
                <td><h3 align = "center">Update General Info...</td>
            </tr>

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
                    <td>Eamil :</td> 
                    <td><input type ="text" name = "email" >
                        <?php echo $emailerr;?> </td>  
                </tr>
                <tr>
                    <td>Location: </td>
                    <td><input type = "text" name = "location"></td>
                </tr>

            <tr>
                <td><h3 align = "center">Update Travel Info...</td>
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
                <td><h3 align = "center">Update Password...</td>
            </tr>

            <tr>
                <td>New Password: </td> 
                <td><input type ="password" name = "password"  >
                    <?php echo $passworderr;?> </td> 
            </tr>
            <tr>
                <td>Confirm Password: </td> 
                <td><input type ="password" name = "confirmPassword"  >
                    <?php echo $confirmPassworderr;?> </td> 
            </tr>

            <tr align = "left">
                <td><td><input type = "submit" name = "UPDATE" value = "UPDATE"> </td></td>
            </tr> 
            <tr align = "left">
                <td><td><input type = "reset"> </td></td>
            </tr>

        </table>
        </from>
    <?php
        include '../../Footer.php';
    ?>
</body>
</html>