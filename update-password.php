<?php  
session_start();
include("dbconnect.php");
?>
<?php 
$em=$_SESSION['semail'];
$opd=$_POST['t2'];
$npd=$_POST['t3'];

$sql="update eusers set password='$npd' where password='$opd' AND email='$em'";
$result = mysqli_query($conn, $sql);
if($result){
    //echo "Password Updated";
    mysqli_close($conn);
    header("location:password-update.html");
           echo "Error: " . mysqli_error($conn);

    exit;
}
else{
    echo "No Password upadated";
    echo "Error: " . mysqli_error($conn);


}
?>