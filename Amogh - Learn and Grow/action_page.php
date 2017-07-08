<html>
<form action="play.php" method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbms="amogh";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbms);

$name=$_POST["uname"];
$psw=$_POST["psd"];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*$allfacs = mysqli_query($dbms, "SELECT * FROM student where sname=\'$name\' and password=\'$psw\'");
//$allfacs = "select * student where sname=\"$name\" and password=\"$psw\"";
$row=(mysqli_fetch_array($allfacs,MYSQLI_ASSOC));
if(!row)
{
echo "Error: " . $allfacs . "<br>" . mysqli_error($conn);
   
} else {
     echo " record  validated successfully";
}*/

$result = $conn->query("select * from student where sname='$name' and password='$psw'");	
 if($result->num_rows !=0){
	
	 echo "sucessfull";
	 
 }
else{
	 echo "No results";
 } 
 

mysqli_close($conn);

?>
</form>
</html>