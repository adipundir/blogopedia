<?php 
session_start();
include("dbconnect.php");
?>
<?php
$em=$_POST['t1'];
$pd=$_POST['t2'];
$sql = "SELECT * FROM eusers";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) 
{
    if($row["email"]==$em && $row["password"]== $pd)
     {
        $_SESSION['semail']=$em;
        $_SESSION['spassword']=$pd;
      header("location:index.html");
     }
} 
echo "Invalid User";
mysqli_close($conn);




?>