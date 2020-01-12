<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php session_start();
		$username = $_SESSION['username'];
		$id = $_SESSION['id']; 
		//print_r($_SESSION); ?>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<script type="text/javascript">
            

	var gallery = new Array();
	//gallery[0] = new Array(new Array ("localhost/Game/game page ajay/web/images/fifa 1.jpg" , "1000.html"), new Array ("localhost/Game/game page ajay/web/images/fifa 2.jpg" , "1000.html"), new Array ("localhost/Game/game page ajay/web/images/cricket2.jpg" , "1000.html"), new Array ("localhost/Game/game page ajay/web/images/FM1.jpg" , "1000.html"), new Array ("localhost/Game/game page ajay/web/images/WWE2.jpg" , "1000.html"));
	
	gallery[0] = new Array(new Array ("fifa 1.jpg" , "game_page/1000.php"), new Array ("Pes1.jpg" , "game_page/1006.php"), new Array ("FM1.jpg" , "game_page/1004.php"), new Array ("Rocket1.jpg" , "game_page/1008.php"));

	gallery[1] = new Array(new Array ("CoDaw1.jpg" , "game_page/1009.php"), new Array ("cs1.jpg" , "game_page/1011.php"), new Array ("titanfall1.jpg" , "game_page/1018.php"), new Array ("overwatch1.jpg" , "game_page/1015.php"));

	gallery[2] = new Array(new Array ("f120171.jpg" , "game_page/1029.php"), new Array ("motogp1.jpg" , "game_page/1032.php"), new Array ("Forza1.jpg" , "game_page/1023.php"), new Array ("NfSmw1.jpg" , "game_page/1025.php"));

	gallery[3] = new Array(new Array ("GTA52.jpg" , "game_page/1035.php"), new Array ("farcry1.jpg" , "game_page/1036.php"), new Array ("gtasanandreas1.jpg" , "game_page/1038.php"), new Array ("watchdogs1.jpg" , "game_page/1039.php"));

	gallery[4] = new Array(new Array ("fieldofglory1.jpg" , "game_page/1054.php"), new Array ("starcraft1.jpg" , "game_page/1056.php"), new Array ("simcity1.jpg" , "game_page/1050.php"), new Array ("ageofempires1.jpg" , "game_page/1049.php"));

	gallery[5] = new Array(new Array ("WWE2.jpg" , "game_page/1003.php"), new Array ("HL21.jpg" , "game_page/1012.php"), new Array ("NfSu2.jpg" , "game_page/1024.php"), new Array ("batmanarkham1.jpg" , "game_page/1041.php"));

	gallery[6] = new Array(new Array ("cricket1.jpg" , "game_page/1001.php"), new Array ("NBA2.jpg" , "game_page/1002.php"), new Array ("Nfl181.jpg" , "game_page/1007.php"), new Array ("FM2.jpg" , "game_page/1004.php"));

	gallery[7] = new Array(new Array ("Wolf1.jpg" , "game_page/1010.php"), new Array ("doom1.jpg" , "game_page/1013.php"), new Array ("dota21.jpg" , "game_page/1014.php"), new Array ("battlefield1.jpg" , "game_page/1016.php"));

	gallery[8] = new Array(new Array ("Midnightclub21.jpg" , "game_page/1022.php"), new Array ("dirtrally1.jpg" , "game_page/1026.php"), new Array ("roadrash1.jpg" , "game_page/1031.php"), new Array ("Shift21.jpg" , "game_page/1028.php"));

	gallery[9] = new Array(new Array ("gtavice1.jpg" , "game_page/1037.php"), new Array ("sleepingdogs1.jpg" , "game_page/1040.php"), new Array ("godofwar1.jpg" , "game_page/1044.php"), new Array ("uncharted2.jpg" , "game_page/1048.php"));

	gallery[10] = new Array(new Array ("ageofempires1.jpg" , "game_page/1052.php"), new Array ("intothebreach1.jpg" , "game_page/1053.php"), new Array ("rollercoaster1.jpg" , "game_page/1055.php"), new Array ("totalwar1.jpg" , "game_page/1051.php"));

	gallery[11] = new Array(new Array ("projectigi2.jpg" , "game_page/1019.php"), new Array ("Snipergw31.jpg" , "game_page/1021.php"), new Array ("DriverSF1.jpg" , "game_page/1027.php"), new Array ("lastofus1.jpg" , "game_page/1045.php"));
	
	function pickImageFrom(whichGallery)
	{
		var idx = Math.floor(Math.random() * gallery[whichGallery].length);
		document.write('<a href="' + gallery[whichGallery][idx][1] + '"><img width="250" height="200" src="game_page/images/' + gallery[whichGallery][idx][0]+'"></a>');
	}
        </script>
	
<title>Games Hub</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Games Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />



</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="index.html">Games <span>Hub</span></a></h1>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li><a><?php 

/*
$servername = "localhost";
$username1 = "ajay";
$password1 = "aaa";
$dbname = "accounts";


$id=$_POST['id'];
$username=$_POST['username'];
//$password=$_POST['password'];


// Create connection
$conn = new mysqli($servername, $username1, $password1, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: ".$conn->connect_error);
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
echo "Welcome " . $username . "".$id."";
 
}

$conn->close();

*/


echo "Welcome " . $username . "";



 





										 ?>
										</a></li>
										<li><a href="#about" class="scroll">About</a></li>
										<li><a href="#gallery" class="scroll">Latest Games</a></li>
								
										
																
										
										
										<li><a href="logout.php">Logout</a></li>
										
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>CALL OF DUTY</h3>
												
												<div class="w3-button">
													<a href="survey/index.php" data-toggle="modal">Rate Games</a>
												</div>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>BATTLEFIELD</h3>
												
												<div class="w3-button">
													<a href="survey/index.php" data-toggle="modal">Rate Games</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about"> 
		<div class="container"> 
			<div class="welcome">
				<div class="agileits-title"> 
					<h2>Welcome</h2>
					<p>The aim is to recommend games using ratings which are given by the members of the community along with the rating of a particular gamer in order to predict and recommend new games to the gamer.</p>


				</div>
			</div>
			<div class="about-w3lsrow"> 
				<div class="col-md-7 col-sm-7 w3about-img"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">- About Us</h5>
						<p>The aim is to recommend games using ratings which are given by the members of the community along with the rating of a particular gamer in order to predict and recommend new games to the gamer.</p>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 



	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Personalized Recommendations</h3> 
			</div>

					<p>							<center>

						<table>
							<?php
								$servername = "localhost";
								$username1 = "ajay";
								$password1 = "aaa";
								$dbname = "accounts";


								// Create connection
								$conn = new mysqli($servername, $username1, $password1, $dbname);
								// Check connection
								if ($conn->connect_error) 
								{
								    die("Connection failed: ".$conn->connect_error);
								} 


								
								$f = fopen("C://xampp/htdocs/Game/python/some.csv", "r");
								$i = 0;
								/*while (($line = fgetcsv($f)) !== false) {
									$i++;
								        echo "<tr>";
								        foreach ($line as $cell) {
								        	if($i==$_SESSION['id'])
								                echo "<td>" . htmlspecialchars($cell) . "</td>";
								        }
								        echo "</tr>\n";
								}*/
								while (($line = fgetcsv($f)) !== false) {
									$i++;
								    preg_match_all("/'(\d+)'/", $line[1], $matches);

								    echo "<tr>";
								    foreach ($matches[1] as $number) {
								        	if($i==$_SESSION['id']){
								        		$query = "SELECT link,gamename FROM games WHERE gameid='$number'";
												$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

								        		//$result = $conn->query($query);
												//$row=$result->fetch_assoc();
												$row = mysqli_fetch_assoc($result);
												$user = $row['link'];
												$gamename=$row['gamename'];

								        		//echo "<td><a href=game_page/{$number}.php>$user</a></td>";
								        		echo "<td><a href=game_page/{$number}.php><img height='250' width='350' src=game_page/{$user}></a><h4><b><center>$gamename</b></h4></td>";
								        		
								        		//echo "<img src=game_page/{$user}>";
								        		//echo '<td>'.$number.'</td>';
								        		echo '<tr>*****</tr>';
								        	}

								    }
								    echo "</tr>";
								}

								fclose($f);
							?>
						</center>
						</table>
						</p>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->


<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>General Recommendations</h3> 
			</div>
<!--content-->
				<div class="wrap">	
			<div class="main">
				<ul  class="og-grid"  >
					<li>
						    
							<script language="javascript">pickImageFrom(0);  </script>

						
					</li>
					<li>
						
							<script language="javascript">pickImageFrom(1);  </script>
						
					</li>
					
					<li>
						
						<script language="javascript">pickImageFrom(2);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(3);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(4);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(5);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(6);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(7);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(8);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(9);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(10);  </script>
					</li>
					<li>
						<script language="javascript">pickImageFrom(11);  </script>
					</li>
					 <div class="clearfix"> </div>
					</ul>
				</div>
			</div>
		</div>
<script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
	



	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Games <span>Hub</span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	
	<!-- //team -->
	  
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">© 2017 Games Hub . All Rights Reserved </p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>