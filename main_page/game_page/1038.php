<!DOCTYPE html>
<html>
<head>
	<?php	
	session_start();
	if(!isset($_SESSION['id'])){
    header("Location:/Game/main_page/register/login/login.php");
}
	?>
<title>GTA:San andreas</title>
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

			<h1 align="center">GTA:San andreas</h1>

			<div class="product">
				
					<iframe width="680" height="345" src="https://www.youtube.com/embed/vW-R2euGBG4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				
				<div class="product-info">



                  
					<center><p><span>Buy at : 

						<a href="https://www.amazon.in/Grand-Theft-Auto-San-Andreas/dp/B01B7U19A6" target="_blank"><img src="http://www.niftybuttons.com/amazon/amazon-button1.png" alt="Amazon Button (via NiftyButtons.com)"></a></p></span>
						

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
<p>The game is set within the fictional U.S. state of San Andreas, which is heavily based on California and Nevada.[b] The state of San Andreas consists of three metropolitan cities: Los Santos, based on Los Angeles; San Fierro, based on San Francisco; and Las Venturas, based on Las Vegas. The single-player story follows Carl "CJ" Johnson, who returns home to Los Santos from Liberty City after his mother's murder. Carl finds his old friends and family in disarray, and over the course of the game he attempts to re-establish his old gang, clashes with corrupt cops, and gradually unravels the truth behind his mother's murder. </p>
<br>
					<div>
						<input id="ac-2" name="accordion-1" type="checkbox" />
						<center><label  for="ac-2">Screenshots </label></center>
						
					</div>	
					<br>
					<center><div class="accordion-image">
								<div class="ac-img">
									<img height="200" width="250" src="gtasanandreas1.jpg" alt="Ferrari">
								</div>
								<div class="ac-img">
									<img height="200" width="250" src="gtasanandreas2.jpg" alt="Ferrari">
								</div>
								<div class="clear"></div>
							</div></center>
	</div>
					
				</section>

			
		<br>
				<h2 align="center"  ><b>Feedback</b></h2>
				<br>
				<br>
				<?php 
					$_SESSION['gameid'] = 1038;

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