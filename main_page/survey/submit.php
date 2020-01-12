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
$username = $_SESSION['username'];
/*
foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";
*/
$servername = "localhost";
$username1 = "ajay";
$password1 = "aaa";
$dbname = "accounts";

//get form details
$rating_1000=@$_POST['1000'];
$rating_1001=@$_POST['1001'];
$rating_1002=@$_POST['1002'];
$rating_1003=@$_POST['1003'];
$rating_1004=@$_POST['1004'];
$rating_1005=@$_POST['1005'];
$rating_1006=@$_POST['1006'];
$rating_1007=@$_POST['1007'];
$rating_1008=@$_POST['1008'];
$rating_1009=@$_POST['1009'];
$rating_1010=@$_POST['radio10'];
$rating_1011=@$_POST['radio11'];
$rating_1012=@$_POST['radio12'];
$rating_1013=@$_POST['radio13'];
$rating_1014=@$_POST['radio14'];
$rating_1015=@$_POST['radio15'];
$rating_1016=@$_POST['radio16'];
$rating_1017=@$_POST['radio17'];
$rating_1018=@$_POST['radio18'];
$rating_1019=@$_POST['radio19'];
$rating_1020=@$_POST['radio20'];
$rating_1021=@$_POST['radio21'];
$rating_1022=@$_POST['radio22'];
$rating_1023=@$_POST['radio23'];
$rating_1024=@$_POST['radio24'];
$rating_1025=@$_POST['radio25'];
$rating_1026=@$_POST['radio26'];
$rating_1027=@$_POST['radio27'];
$rating_1028=@$_POST['radio28'];
$rating_1029=@$_POST['radio29'];
$rating_1030=@$_POST['radio30'];
$rating_1031=@$_POST['radio31'];
$rating_1032=@$_POST['radio32'];
$rating_1033=@$_POST['radio33'];
$rating_1034=@$_POST['radio34'];
$rating_1035=@$_POST['radio35'];
$rating_1036=@$_POST['radio36'];
$rating_1037=@$_POST['radio37'];
$rating_1038=@$_POST['radio38'];
$rating_1039=@$_POST['radio39'];
$rating_1040=@$_POST['radio40'];
$rating_1041=@$_POST['radio41'];
$rating_1042=@$_POST['radio42'];
$rating_1043=@$_POST['radio43'];
$rating_1044=@$_POST['radio44'];
$rating_1045=@$_POST['radio45'];
$rating_1046=@$_POST['radio46'];
$rating_1047=@$_POST['radio47'];
$rating_1048=@$_POST['radio48'];
$rating_1049=@$_POST['radio49'];
$rating_1050=@$_POST['radio50'];
$rating_1051=@$_POST['radio51'];
$rating_1052=@$_POST['radio52'];
$rating_1053=@$_POST['radio53'];
$rating_1054=@$_POST['radio54'];
$rating_1055=@$_POST['radio55'];







/*if ( !isset($_POST['1005'])) {
	   $rating_1005 = '0';
	}

*/

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
		   ('$id',1008,'$rating_1008'),
		   ('$id',1009,'$rating_1009'),
		   ('$id',1010,'$rating_1010'),
		   ('$id',1011,'$rating_1011'),
		   ('$id',1012,'$rating_1012'),
		   ('$id',1013,'$rating_1013'),
		   ('$id',1014,'$rating_1014'),
		   ('$id',1015,'$rating_1015'),
		   ('$id',1016,'$rating_1016'),
		   ('$id',1017,'$rating_1017'),
		   ('$id',1018,'$rating_1018'),
		   ('$id',1019,'$rating_1019'),
		   ('$id',1020,'$rating_1020'),
		   ('$id',1021,'$rating_1021'),
		   ('$id',1022,'$rating_1022'),
		   ('$id',1023,'$rating_1023'),
		   ('$id',1024,'$rating_1024'),
		   ('$id',1025,'$rating_1025'),
		   ('$id',1026,'$rating_1026'),
		   ('$id',1027,'$rating_1027'),
		   ('$id',1028,'$rating_1028'),
		   ('$id',1029,'$rating_1029'),
		   ('$id',1030,'$rating_1030'),
		   ('$id',1031,'$rating_1031'),
		   ('$id',1032,'$rating_1032'),
		   ('$id',1033,'$rating_1033'),
		   ('$id',1034,'$rating_1034'),
		   ('$id',1035,'$rating_1035'),
		   ('$id',1036,'$rating_1036'),
		   ('$id',1037,'$rating_1037'),
		   ('$id',1038,'$rating_1038'),
		   ('$id',1039,'$rating_1039'),
		   ('$id',1030,'$rating_1030'),
		   ('$id',1041,'$rating_1041'),
		   ('$id',1042,'$rating_1042'),
		   ('$id',1043,'$rating_1043'),
		   ('$id',1044,'$rating_1044'),
		   ('$id',1045,'$rating_1045'),
		   ('$id',1046,'$rating_1046'),
		   ('$id',1047,'$rating_1047'),
		   ('$id',1048,'$rating_1048'),
		   ('$id',1049,'$rating_1049'),
		   ('$id',1050,'$rating_1050'),
		   ('$id',1051,'$rating_1051'),
		   ('$id',1052,'$rating_1052'),
		   ('$id',1053,'$rating_1053'),
		   ('$id',1054,'$rating_1054'),
		   ('$id',1055,'$rating_1055')";

	$sql2 = "DELETE FROM ratings WHERE rating = '';";


if ($conn->query($sql) && $conn->query($sql2)  === TRUE)
{
    echo "Ratings submitted to database<br>";
    echo "redirecting to Main page in 3 secs:";
    header( "Refresh:3; url=/Game/main_page/index1.php", true, 303 );
  } else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

</body>
</html>

