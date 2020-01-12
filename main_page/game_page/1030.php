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
<title>Grand Turismo 6</title>
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

			<h1 align="center">Grand Turismo 6</h1>

			<div class="product">
				
				    <iframe width="680" height="345" src="https://www.youtube.com/embed/VbsZaa0ZZzA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<div class="product-info">



                  
					<center><p><span>Buy at : 

						<a href="https://www.amazon.in/Sony-98296-Gran-Turismo-PS3/dp/B00CRL9TU2" target="_blank"><img src="http://www.niftybuttons.com/amazon/amazon-button1.png" alt="Amazon Button (via NiftyButtons.com)"></a></p></span>
						

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
<p>Gran Turismo 6 is a racing video game developed by Polyphony Digital and published by Sony Computer Entertainment for the PlayStation 3 video game console. It is the sixth major release and twelfth game overall in the Gran Turismo video game series.  It was released worldwide on December 6, 2013, and was popular with critics, won awards, and topped charts in countries around the world. New features included the addition of more cars and tracks, improvements to the car customisation options, and partnerships with the Goodwood Festival of Speed, the Ayrton Senna Institute, the FIA and NASA. Gran Turismo 6 is the first-ever video game to have officially certified FIA content. </p>
<br>
					<div>
						<input id="ac-2" name="accordion-1" type="checkbox" />
						<center><label  for="ac-2">Screenshots </label></center>
						
					</div>	
					<br>
					<div class="accordion-image">
								<div class="ac-img">
									<img height="200" width="250" src="images/Grandturismo61.jpg" alt="Ferrari">
								</div>
								<div class="ac-img">
									<img height="200" width="250" src="images/Grandturismo62.jpg" alt="Ferrari">
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
					$_SESSION['gameid'] = 1030;

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
