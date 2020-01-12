<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<?php	
	session_start();
	if(!isset($_SESSION['id'])){
    header("Location:/Game/main_page/register/login/login.php");
}
	?>
<title>Need for Speed: Most Wanted</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="E Shop Product Details Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Android Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<!-- //Web-Fonts -->

<!-- Custom-Theme-Files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- //Custom-Theme-Files -->
</head>

<!-- Body-Starts-Here -->
<body>

	<!-- Content-Starts-Here -->
	<div class="content">

	<h1></h1>

		<div class="container">

			<h1 align="center">Need for Speed: Most Wanted</h1>

			<div class="product">
				
				    <iframe width="680" height="345" src="https://www.youtube.com/embed/IpGS1K9mLPQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<div class="product-info">



                  
					<center><p><span>Buy at : 

						<a href="https://www.amazon.in/Need-Speed-Most-Wanted-PC-DVD/dp/B00IE7Y8C2" target="_blank"><img src="http://www.niftybuttons.com/amazon/amazon-button1.png" alt="Amazon Button (via NiftyButtons.com)"></a></p></span>
						

					</center>
				</div>
				<div class="clear"></div>
			</div>

			<div class="accordion">
				<section class="ac-container">
					<div>
						<input id="ac-1" name="accordion-1" type="checkbox" />
						<center><label for="ac-1">Description</label></center>
						
					</div>
					<br>
<p>To be Most Wanted, you’ll need to outrun the cops, outdrive your friends, and outsmart your rivals. With a relentless police force gunning to take you down, you’ll need to make split-second decisions. Use the open world to your advantage to find hiding spots, hit jumps and earn new vehicles to keep you one step ahead. In true Criterion Games fashion, an enhanced Autolog puts your friends at the heart of your experience. In an open world with no menus or lobbies, you’ll be able to instantly challenge your friends and prove your driving skill in a variety of seamless multiplayer events. Your rivals will do everything they can to stop you from getting to the top. In this world, there can only be one Most Wanted.</p>
<br>
					<div>
						<input id="ac-2" name="accordion-1" type="checkbox" />
						<center><label  for="ac-2">Screenshots </label></center>
						
					</div>	
					<br>
					<div class="accordion-image">
								<div class="ac-img">
									<img height="200" width="250" src="images/NfSmw1.jpg" alt="Ferrari">
								</div>
								<div class="ac-img">
									<img height="200" width="250" src="images/NfSmw2.jpg" alt="Ferrari">
								</div>
								<div class="clear"></div>
							</div>
	</div>
					
				</section>

			
				
	<br>
				<h2 align="center"  ><b>Feedback</b></h2>
				<br>
				<br>
				<?php 
					$_SESSION['gameid'] = 1025;

				?>
				<h3 align="center">How would you rate this game:</h3>
				<br>
							<form action="submit.php" method="post">
							<center><input type="radio" name="rating" value="1" checked align="center"> 1
                            <input type="radio" name="rating" value="2"> 2
                            <input type="radio" name="rating" value="3"> 3 
                            <input type="radio" name="rating" value="4"> 4 
                            <input type="radio" name="rating" value="5"> 5  
                        </center>
                            <br>
                            <br>
                            
                            <br>
                            <br>
                           <center>
                            <input type="submit" id="submitbutton" value="Submit" onclick="alert(' Review added successfully!!)"></center>
                        </form> 




			</div>
										

		</div>
		
	</div>
	<!-- //Content-Ends-Here -->

	<!-- Copyright-Starts-Here -->
	<div class="copyright">
	    <p>&copy; 2016 E Shop Product Details Widget. All Rights Reserved </p>
	</div>
	<!-- //Copyright-Ends-Here -->

</body>
<!-- Body-Ends-Here -->

</html
