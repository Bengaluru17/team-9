<html>
<form action="index.html" method="post">
<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbms="amogh";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbms);

$name=$_POST["name"];
$psw=$_POST["psw"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO student (sname,password,age,gender,mobile) VALUES (\"$name\",\"$psw\",$age,\"$gender\",$mobile)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "Inserted succesfully";
?>
</form>
</html>
