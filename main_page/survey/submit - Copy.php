<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	echo{
		background-color: red;
		color: white;
		text-align: center;
	}
	


</style>
</head>
<body>

<?php session_start();


$id=$_SESSION['id'];

$servername = "localhost";
$username1 = "ajay";
$password1 = "aaa";
$dbname = "accounts";

//get form details
$rating_1000=$_POST['1000'];
$rating_1001=$_POST['1001'];
$rating_1002=$_POST['1002'];
$rating_1003=$_POST['1003'];
$rating_1004=$_POST['1004'];
$rating_1005=$_POST['1005'];
$rating_1006=$_POST['1006'];
$rating_1007=$_POST['1007'];
$rating_1008=$_POST['1008'];




// Create connection
$conn = new mysqli($servername, $username1, $password1, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

	$sql = "INSERT INTO ratings
	VALUES ('$id',1000,'$rating_1000'),
		   ('$id',1001,'$rating_1001'),
		   ('$id',1002,'$rating_1002'),
		   ('$id',1003,'$rating_1003'),
		   ('$id',1004,'$rating_1004'),
		   ('$id',1005,'$rating_1005'),
		   ('$id',1006,'$rating_1006'),
		   ('$id',1007,'$rating_1007'),
		   ('$id',1008,'$rating_1008')";


	$sql1 = "DELETE FROM ratings WHERE ratings = '';";

if ($conn->query($sql) === TRUE)
{
    echo "Record submitted <br>";
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

</body>
</html>

