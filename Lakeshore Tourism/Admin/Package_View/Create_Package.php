<html>
    <body>
    <?php include '../Package_Control/Packagevalid.php' ?>
        <form action = "" method = "POST">
            <table align = "center">
                <tr>
                    <td>
                       <h2 align = "center"> Package Details </h2>
                    </td>
                </tr>
                <tr>
                    <td> Package Name </td>
                   <td> <input type ="text" name ="pname"></td>
                    <td><?php echo $namerr;?></td>
                </tr>
                <tr>
                    <td> Location </td>
                    <td><input type = "text" name = "location"></td>
                    <td><?php echo $locerr;?></td>
                </tr>
                <tr>
                    <td> Days</td>
                    <td><input type = "text" name =" day"></td>
                    <td><?php echo $dayerr;?></td>

                </tr>
                <tr>
                    <td> Price </td>
                    <td><input type = "text" name =" price"></td>
                    <td><?php echo $pricerr;?></td>
                </tr>
                <tr>
                    <td>
                        <input type = "submit" name = "submit" value ="upload">
                        <?php echo $emperr;?>
                    </td>
                </tr>
            </table>
          </form>
          
    </body>
</html>