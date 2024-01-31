<?php 
session_start();
include("dbconnect.php");
?>

<?php 
$user=  $_SESSION['semail'];
$post=$_POST['post-input'];
$sql="insert into posts values('$post','$user')";
$result = mysqli_query($conn, $sql);
if($result)
{
    mysqli_close($conn);
    header("Location:index.html");
    exit;
}else{
    echo "No Records Inserted";
}
?>
