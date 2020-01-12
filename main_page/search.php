<?php
// create a new function
function search($text){
	
	// connection to the Ddatabase
	//$db = new PDO("mysql:host=localhost;dbname=accounts", 'aaa', '');
	// let's filter the data that comes in
	$db = new PDO("mysql:host=localhost;dbname=befinal", 'root', '');
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
	$get_name = $db->prepare("SELECT link,gamename FROM table3 WHERE gamename LIKE concat('%', :gamename, '%')");
	// execute the query
	$get_name -> execute(array('gamename'=> $text));
	// show the users on the page
	while($names = $get_name->fetch(PDO::FETCH_ASSOC)){

		//while($links = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each user as a link
		echo '<a href="">'.$names['gamename'].'</a>';
		
		
		}
	
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>