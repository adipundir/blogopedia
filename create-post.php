<?php 
session_start();
include("dbconnect.php");
?>

<?php 

$user=  $_SESSION['semail'];
$post=$_POST['post-input'];
if($user)
{

    //$sql="insert into posts values('15','$post','$user','f','0','0')";
    $sql="INSERT INTO posts (post, user,is_anonymous,likes,dislikes) VALUES ('$post', '$user','f','0','0')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        mysqli_close($conn);
        header("Location:index.html");
        exit;
    }else{
        echo "No Records Inserted";
       // echo "Error: " . mysqli_error($conn);
    }
}
else {
    header("Location:login.html");
}
?>
