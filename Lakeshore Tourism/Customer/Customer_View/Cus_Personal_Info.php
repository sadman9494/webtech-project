<html>
    <body>
         <h3>My Information</h3>
<br>
<?php
include '../Customer_Control/Cus_Personal_Info.php';
if (!isset($_SESSION["email"]))
{
    header("location:../../Home/view/home.php");
}
?>
</body>
    </html>