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

$userid=$_SESSION['id'];
$username = $_SESSION['username'];


$servername = "localhost";
$username1 = "ajay";
$password1 = "aaa";
$dbname = "accounts";

//get form details
$rating=$_POST['rating'];

//$userid=101;
$gameid=$_SESSION['gameid'];



// Create connection
$conn = new mysqli($servername, $username1, $password1, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 


	//Insert into database
$sql = "INSERT INTO ratings
VALUES ('$userid','$gameid','$rating')";

if ($conn->query($sql) === TRUE)
{
    echo "Record submitted <br>";
    header("location:/Game/main_page/index.php");
} else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

</body>
</html>

