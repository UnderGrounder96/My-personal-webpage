<?php include("script.php")?>
<!DOCTYPE html>

<html lang='pl'>
	<head>
		<title>Lucek Afonso</title>
		<meta name="author" content="Lucio Afonso"/>
		<meta name="description" content="Contact"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-16;"/>
		<meta http-equiv="cookie" content="userid=xyz;"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>
			$(function(){				
				$("#nav").hide().fadeIn(2500);
				$(".i").css("color", "green");
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

			<nav class="w3-topnav w3-green w3-text-shadow w3-center" id="nav"><?php echo $_SESSION["text"];?></nav>
		</div>
<br>

		<ul class="w3-ul"> 
	
			<li>
				<h3>Poprawione kontakt</h3>
				<p>Już działa, czekam na wasze 'feedback'. 
				<br>Nic nowego nie dodałem.</p>
				<h6>02-04-2017</h6>
			</li>
			
			<li>
				<h3>Małe ulepszenia</h3>
				<p>Dodałem jQuery, pracuję nad PHP. 
				<br>Dodałem nowe API</p>
				<h6>06-06-2016</h6>
			</li>
					
			<li>
				<h3>Uwaga!</h3>
				<p>W czwartek 05.11.2015 o godz. 20:00 serwis internetowy, będzie niedostepny z powodu niezbędnych prac serwisowych. 
				<br>Wznowienie działania serwisu jest planowane na godzinę 03:00 dnia 06.11.2015</p>
				<h6>05-11-2015</h6>
			</li>

			<li>
				<h3>Dodane O mnie</h3>
				<p>Teraz mogą państwo wiedzieć więcej o mnie.</p>
				<h6>10-10-2015</h6>	
			</li>

			<li>
				<h3>Dodane zdjęć</h3>
				<p>Teraz są więcej zdjęcia, chyba fajne no nie? ;D</p>
				<h6>18-08-2015</h6>
			</li>

			<li>
				<h3>Copyright</h3>
				<p>Nie wolno skopiować dane z tej strony. Jeśli jest potrzebny czegoś co tu jest <i><u><b>proszę posłać link strony!!!</b></u></i></p>
				<h6>06-03-2015</h6>
			</li>

			<li>
				<h3>Aktualizacji serwerowe</h3>
				<p>Będzie aktualizacji mój serwer, muszę sprawdzić czy wszystko działa dokładne. <br>Przepraszam za trudności!</p>
				<h6>06-09-2014</h6>
			</li>
			
			<li>
				<h3>Dodane zdjęć</h3>
				<p>Teraz są zdjęcia, chyba fajne no nie? ;D</p>
				<h6>10-08-2014</h6>
			</li>

			<li>
				<h3>Aktualizacji kontakt</h3>
				<p>Jest teraz możliwe pisania do mnie z strony kontakt.<br>Odpowiadam wszystkich, kiedy będę mogł!</p>
				<h6>05-06-2013</h6>
			</li>
		
			<li>
				<h3>Kolory</h3>
				<p>Od dzisiaj, każda strona ma swoje właściwe kolor!</p>
				<h6>12-12-2012</h6>
			</li>
		</ul>

		<footer class="w3-container w3-padding-32 w3-theme w3-center">
			<p><?php echo $_SESSION["text2"];?></p>
			<p class="w3-text-shadow"><?php echo $_SESSION["text3"];?></p>	
		</footer>
		
		<!--script type="text/javascript">
		 	document.getElementsByTagName("div")[0].style.display = "none";
		 </script-->
	</body>
</html>
