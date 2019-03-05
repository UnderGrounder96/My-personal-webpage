<?php include("script.php")?>
<!DOCTYPE html>

<html lang='pl'>
	<head>
		<title>Lucek Afonso</title>
		<meta name="author" content="Lucio Afonso"/>
		<meta name="description" content="Menu"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-16;"/>
		<meta http-equiv="cookie" content="userid=xyz;"/>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="pic/client.ico">
        <script src="js/cookie.js"></script>
        
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body class="w3-padding w3-myfont" style="font-family: Constantia,'Comic Sans MS', 'Franklin Gothic'" onload="checkCookie()">

		<div id="w3-top">
			<header class="w3-container w3-center">
  				<h1 class="w3-text-shadow" style="font-family: 'Comic Sans MS'">Platinado</h1>
			</header>

			<nav class="w3-topnav w3-black w3-text-shadow w3-center"><?php echo $_SESSION["text"];?></nav>
		</div>
<br>
		<div class="w3-image w3-right" style="width:25%">
  			<img src="pic/nl.jpg" class="w3-circle" alt="Me" style="width:95%"><br>	
			<!--div class="w3-title w3-text-white" align="middle">Welcome!</div-->
		</div>

		<div class="w3-container w3-center w3-border">

			<i class="fa fa-spinner logo fa-spin fa-5x"></i>
 			<p><h1 style="font-family: 'Comic Sans MS'"> Witam serdecznie na mojej stronie internetowej!  </h1></p>

			<h3 style="font-family: 'Franklin Gothic'">Tu można znaleźć bardzo szczegółowe informacje o mnie, ostatnie wiadomości strony oraz kontakty. 
<br>			Jeśli mają Państwo Facebook, Twitter bardzo proszę o śledzienia. :)<br>Każdy temat ma swoje kolor. <b>Uwagi będą na <span style="color:red">czerwone.</span></b></h3>
		</div>

		<div class="w3-container w3-center w3-black">
			<canvas id="canvas" width="400" height=400"></canvas><br>
			<i id="user" class="w3-text-white"></i>
		</div>

        <script src="js/clock.js"></script>

		<footer class="w3-container w3-padding-32 w3-theme w3-center">
			<p><?php echo $_SESSION["text2"];?></p>
			<p class="w3-text-shadow"><?php echo $_SESSION["text3"];?></p>	
		</footer>
	
		<!--script type="text/javascript">
		 	document.getElementsByTagName("div")[0].style.display = "none";
		 </script-->
	</body>
</html>>
