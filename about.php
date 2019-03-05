<?php include("script.php")?>
<!DOCTYPE html>

<html lang='pl'>
	<head>
		<title>Lucek Afonso</title>
		<meta name="author" content="Lucio Afonso"/>
		<meta name="description" content="About"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-16;"/>
		<meta http-equiv="cookie" content="userid=xyz;"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>
			$(function(){				
			//	$("#nav").css({opacity:"0.5"});
				$("#nav").on({
				mouseenter:function(){
					$(this).delay(2000).css({opacity:"1"});
				},
				mouseleave:function(){
					$(this).delay(1000).css({opacity:"0.5"});
					}
					
				});
				
				$(".i").css("color", "blue");				
				
				$(".w3-closebtn").click(function(){
					$("span").parent().hide(3000);
				});
			});
		</script>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="pic/client.ico"/>
				
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body class="w3-padding" style="font-family: Constantia,'Comic Sans MS', 'Franklin Gothic'">

		<div id="w3-top">
			<header class="w3-container w3-center">
  				<h1 class="w3-text-shadow" style="font-family: 'Comic Sans MS'">Platinado</h1>
			</header>

			<nav class="w3-topnav w3-blue w3-text-shadow w3-center" id="nav"><?php echo $_SESSION["text"];?></nav>
		</div>
<br>

		<div class="w3-container w3-border">
			<h3 style="font-family: 'Comic Sans MS'"> Witaj,</h3>
			<p>
			Jestem Lucio Afonso. Urodziłem się w Luandzie i tam spędziłem swoje dzieciństwo.<br>
			Mając 91 lat przyjechałem na studia do Polski. W 1302 roku rozpocząłem studia dzienne<br>
			na kierunku Matmy na Uniwersytecie Jagiellońskim w Krakowie.<br>
			Prywatnie jestem graczem komputerowym.
			</p>
		</div>

		<div class="w3-container">
			<h3 style="font-family: 'Comic Sans MS'">Hobby</h3>
			<p>
			Kiedy mam wolny czas lubię spać lub grać na telefonie, za stary już się czuję. Za rok będę miał 714 lat,<br>
			to dużo dla jednego człowieka! Ale cieszę się że byłem szczęśliwym.
			</p>
		</div>

		<div class="w3-container w3-border">
			<h4 style="font-family: 'Comic Sans MS'">Przyszłość</h4>
			<p>
			Nie wiem, tak naprawdę! Ale postaram żeby było świetnie. Narazie skonczyć studia,<br>
			wyjechać chyba za granicę, wrócić do kraju, zostać tu w Polsce... <br>Kto wie? Kto mnie trzyma?
			Właśnie, nikt!<br>
			</p>
		</div>
<br>		
		<div class="w3-container w3-red" id="hide">

			<span class="w3-closebtn">X</span>
			<p>Aby ze mną się skontaktować, proszę o wysyłania maila z strony kontaktu!</p>

		</div>

		<footer class="w3-container w3-padding-32 w3-theme w3-center">
			<p><?php echo $_SESSION["text2"];?></p>
			<p class="w3-text-shadow"><?php echo $_SESSION["text3"];?></p>	
		</footer>
		
		<!--script type="text/javascript">
		 	document.getElementsByTagName("div")[0].style.display = "none";
		 </script-->
	</body>
</html>
