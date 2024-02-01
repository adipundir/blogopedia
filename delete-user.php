<?php 
session_start();
include("dbconnect.php");
?>
<?php

$em=$_SESSION['semail'];

$sql = "delete FROM eusers where email='$em'";
$result = mysqli_query($conn,$sql);
if($result)
{
    //echo " $un information DELETED";
    header("location:user-deleted.html");
}
else
{
    echo "0 result";
}
mysqli_close($conn);

?>