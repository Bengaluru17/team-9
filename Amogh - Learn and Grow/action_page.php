<HTML>
<head>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>
<body align="center" style="padding: 360px;">
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
	
	 
	//echo "Successfully logged in!";
 header("Location: play.php");
	 
 }
else{
	 echo "No results";
 } 
 

mysqli_close($conn);

?>
</BODY>
</HTML>