

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Web Inventaris</title>
		<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Donuts Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
		<script>
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
		<!-- Meta tags -->
		<!-- font-awesome icons -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
		<!--stylesheets-->
		<link href="css/pos.css" rel='stylesheet' type='text/css' media="all">
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' media="all">
			<!--//style sheet end here-->
			<link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
				<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 

				</head>
				<body>
					<div class="banner1">
			<div class="login-banner">
				<div class="banner-cover">
					<h2 class="header-w3ls"> Aplikasi Pengolahan Peralatan Teknologi</h2>
			
						<div class="login-page">
       	  					<div class="login-main">  	
    	 						<div class="login-head">
									<h1>Login</h1>
								</div>

				<div class="login-block">


					<form method="post" action="login_proses.php">
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					
					<div class="forgot-top-grids">
						<div class="forgot-grid">
					<div class="clearfix"> </div>
					</div>
					<input type="submit" name="login" value="Login">	
								
					
					</form>
				</div>
				</div>
				</div>
				</div>
				<br>
				<div class="copy">
					<p>&copy;2019 PT XYZ. All Rights Reserved
					</p>
				</div>
			</body>
		</html>