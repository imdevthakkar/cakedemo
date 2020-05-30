<!DOCTYPE html>
<html>
<head>
	<title>DevCafe</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="images/logo.png">
</head>
<body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	 <header>
		<nav>
			<div class="row clearfix">
				<img src="images/logo.png" class="logo">
				<ul class="main-nav" id="check-class" >
					<li><a href="#">CAKE DELIVERY</a></li>
					<li><a href="#">HOW TO ORDER</a></li>
					<li><a href="#">CHECK MORE</a></li>
					<li><a href="#">Sign up</a></li>
				</ul>
				<a href="#" class="mobile-icon" onclick="slidshow()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>

		<div class="main-content-header">
		<h1> WELCOME TO <span class="colorchange"> DEV CAFE</span>.<br>
			HOUSE OF CAKE LOVER OO YES.</h1>
			<a href="#" class="btn btn-full">click to order</a>
			<a href="#" class="btn btn-nav">show me more</a>
		</div>
	</header>
	<script type="text/javascript">
		function slidshow() {
			var x =document.getElementById('check-class');  
			if (x.style.display==="none") {
				x.style.display="block";
			}else{
				x.style.display="none" ;
			}
		}
		
	</script>
	

</body>
</html>