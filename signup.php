<?php 
$em=$_POST['t1'];
$pd=$_POST['t2'];

$servername="localhost";
$username= "root";
$password= "";
$dbname= "blogopedia";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="insert into eusers values('$em','$pd')";
$result = mysqli_query($conn, $sql);
if($result)
{
    echo "Records Inserted";
}else{
    echo "No Records Inserted";
}
?>