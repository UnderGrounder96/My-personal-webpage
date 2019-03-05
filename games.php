<?php include("script.php")?>
<!DOCTYPE html>

<html lang='pl'>
	<head>
		<title>Lucek Afonso</title>
		<meta name="author" content="Lucio Afonso"/>
		<meta name="description" content="Games"/>
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
		$(document).ready(function(){
//			$("#nav").hide().fadeIn(8000);
				
			$(".i").css("color", "red");
			$("#flip").click(function(){
			$("#panel").slideToggle("slow");
			});
		});
		</script>
		<style>
		#panel, #flip {
		    padding: 5px;
		    text-align: center;
		    background-color: #e5eecc;
		    border: solid 1px #c3c3c3;
		}
		
		#panel {
		    padding: 50px;
		    display: none;
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

			<nav class="w3-topnav w3-red w3-text-shadow w3-center"><?php echo $_SESSION["text"];?></nav>
		</div>
<br>
		<div class="w3-container w3-center" id="flip">
			Click me to play games
		</div>
		<div class="w3-container w3-center"id="panel">
			<iframe src="pag/trygame.htm" style="height:550px;width:650px;border:none"></iframe>

			<iframe src="pag/trygame2.htm" style="height:500px;width:650px;border:none;float:right"></iframe>
		</div>
<br>

        <audio controls>
            <source src="snd/Outro.mp3" type="audio/mpeg">
        Your browser doesn't support the audio element.
        </audio>

		<footer class="w3-container w3-padding-32 w3-theme w3-center">
			<p><?php echo $_SESSION["text2"];?></p>
			<p class="w3-text-shadow"><?php echo $_SESSION["text3"];?></p>	
		</footer>	

		<!--script type="text/javascript">
		 	document.getElementsByTagName("div")[0].style.display = "none";
		 </script-->
	</body>
</html>
