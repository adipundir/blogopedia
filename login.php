<?php 
session_start();
include("dbconnect.php");
?>
<?php
$em=$_POST['t1'];
$pd=$_POST['t2'];
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) 
{
    if($row["email"]==$un && $row["password"]== $pd)
     {
        $_SESSION['semail']=$un;
        $_SESSION['spassword']=$pd;
      header("location:index.html");
     }
} 
echo "Invalid User";
mysqli_close($conn);




?>