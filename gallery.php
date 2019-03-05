<?php include("script.php")?>
<!DOCTYPE html>

<html lang='pl'>
	<head>
		<title>Lucek Afonso</title>
		<meta name="author" content="Lucio Afonso"/>
		<meta name="description" content="Gallery"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-16;"/>
		<meta http-equiv="cookie" content="userid=xyz;"/>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="pic/client.ico"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>
			$(function(){				
				$("#01").on('click', function(){
						$(".01").toggle(1000);
				});
				$("#02").on('click', function(){
						$(".02").toggle(1000);
				});
				$(".i").css("color", "pink");
			});
		</script>
		
		<style>
		    img{
		        opacity:0.5;
		        filter:alpha(opacity=50);/*IE8 and below*/
		    }
		    
		    img:hover{
		        opacity:1.0;
		        filter:alpha(opacity=100);/*IE8 and below*/
		        border: 1px dotted black;
		        border-radius:8px;
		    }
		</style>
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body class="w3-padding" style="font-family: Constantia,'Comic Sans MS', 'Franklin Gothic'">

		<div id="w3-top">
			<header class="w3-container w3-center">
  				<h1 class="w3-text-shadow" style="font-family: 'Comic Sans MS'">Platinado</h1>
			</header>

			<nav class="w3-topnav w3-pink w3-text-shadow w3-center"><?php echo $_SESSION["text"];?></nav>
		</div>
<br>

		<div class="w3-container w3-light-grey w3-center" id="01">
			<h1>Lato 2015</h1>
		</div>

		<div class="w3-row-padding w3-margin-top 01">

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/a.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Avatar 9.0</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/pr.jpg" style="width:100%">
						<div class="w3-container">
						<h5>Sweet little Princess</h5>
						</div>
				</div>
			</div>
			
			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/aqw.jpg" style="width:100%">
						<div class="w3-container">
							<h5>My dog</h5>
						</div>
				</div>
			</div>
		</div>

		<div class="w3-row-padding w3-margin-top 01" >

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/cc.png" style="width:100%">
						<div class="w3-container">
							<h5>Capsule Corporation</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/asd.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Apple</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/b.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Brother</h5>
						</div>
				</div>
			</div>
		</div>

<br>

		<div class="w3-container w3-light-grey w3-center" id="02">
			<h1>Lato 2014</h1>
		</div>

		<div class="w3-row-padding w3-margin-top 02">

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/ij.jpg" style="width:100%">
						<div class="w3-container">
						<h5>Inspiration</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/qwd.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Yes, sir!</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/wsad.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Unkut</h5>
						</div>
				</div>
			</div>
		</div>
		
		<div class="w3-row-padding w3-margin-top 02">

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/cha.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Things</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/ghja.jpg" style="width:100%">
						<div class="w3-container">
							<h5>Just me!</h5>
						</div>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-card-2">
					<img src="pic/ty.jpg" style="width:100%">
						<div class="w3-container">
							<h5>My country. My home.</h5>
						</div>
				</div>
			</div>
		</div>
<br>
<br>
<br>
		<footer class="w3-container w3-padding-32 w3-theme w3-center">
			<p><?php echo $_SESSION["text2"];?></p>
			<p class="w3-text-shadow"><?php echo $_SESSION["text3"];?></p>	
		</footer>
		
		<!--script type="text/javascript">
		 	document.getElementsByTagName("div")[0].style.display = "none";
		 </script-->
	</body>

</html>
