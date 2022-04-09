<html>
    
<body>
    <?php
    session_start();

        include '../../Header.php';
        include '../Customer_Control/Cus_Update.php';
        if (!isset($_SESSION["email"]))
{
    header("location:../../Home/view/home.php");
}
    ?>
    <h2 align = "center">Update Information</h2>
    
    <form action = "" method = "post">
    <table align = "center"> 
        
        <tr>
            <td> Name : </td>
            <td><input type ="text" name = "name" > </td>
            <td><?php echo $Nameerr;?></td>
            
        </tr>      
        <tr>
            <td>Phone Number : </td>
            <td><input type = "text" name = "phnNumber"></td>
            <td><?php echo $phnNumbererr;?></td>
        </tr>
        <tr>
            <td>Eamil :</td> 
            <td><input type ="text" name = "email" >   </td>  
            <td><?php echo $emailerr;?></td>
        </tr>
        <tr>
            <td>Password :</td> 
            <td><input type ="password" name = "pass"  ></td> 
            <td><?php echo $passworderr;?></td>
        </tr>
        <tr>
            <td>Confirm Password :</td> 
            <td><input type ="password" name = "confirmPass"  ></td> 
            <td><?php echo $confirmPassworderr;?></td>
        </tr>
       <table align=center>
        
        <tr>
           <td> <td><input type = "submit" name = "submit"> </td> 
            <td><input type = "reset"></td> </td>
        </tr>
        <tr>
            <td align = center><?php echo $allemperr;?></td>
            </tr>
</table>
    </table>
    </from>
    <?php
        include '../../Footer.php';
    ?>
</body>
</html>