<?php session_start();
$servername = "localhost";
$username1 = "ajay";
$password1 = "aaa";
$dbname = "accounts";



$username=$_POST['username'];
$password=$_POST['password'];

//print_r($_SESSION); 


// Create connection
$conn = new mysqli($servername, $username1, $password1, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 


$query = "SELECT * FROM users1 WHERE username='$username' and password='$password'";
     
$query1 = "SELECT id FROM users1 WHERE username='$username' and password='$password'";


$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

$result1 = $conn->query($query);
$row=$result1->fetch_assoc();


if ($count == 1){
$_SESSION['username'] = $username;
$_SESSION['id'] = $row['id'];

}else{
echo "Invalid Login Credentials.";
//header("url=register/login/login.php");

}


if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
$id = $_SESSION['id'];
//echo "Welcome " . $username . "".$id."";
//print_r($_SESSION);
header("location:/Game/main_page/index.php");
}




$conn->close();

 
?>
