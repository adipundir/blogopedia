<!DOCTYPE html>
<head></head>
<body>
<table border="5px">  
<tr>
    
    
    <th>EMAIL ID:</th>
    
   
</tr>



<?php
$servername="localhost";
$username="root";
$password="";
$dbname="blogopedia";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$em=$_POST['search-input'];
$sql="select * from eusers where email like '$em%'";
$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['email']."</td></tr>";
    }
}
else{echo "0 result";}
?>
</table>
</body>
</html>
