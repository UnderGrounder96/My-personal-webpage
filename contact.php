<?php 
	require("config.php");
	include("script.php");
	
	$nameErr = $e_mailErr = $textErr = "";
	$name = $e_mail = $know_me = $text = "";
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["flname"])) {
			$nameErr = "Name is required";
		} else {
			$name = test_input($_POST["flname"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed"; 
			}
		}
		  
		if (empty($_POST["email"])) {
			$e_mailErr = "Email is required";
		} else {
			$e_mail = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$e_mailErr = "Invalid email format"; 
			}
		}
		
		if (empty($_POST["description"])) {
			$textErr = "Text is empty";
		} else {
			$text = test_input($_POST["description"]);
		}
		
		$rating = test_input($_POST['rating']);
		$know_me = test_input($_POST["radio"]);
		$pryority_1 = test_input($_POST['pryority_1']);
		$pryority_2 = test_input($_POST['pryority_2']);
		
		$sql = "INSERT INTO comments (name, e_mail, text, rating, pryority_1, pryority_2, know_me) VALUES ('".$name."', '".$e_mail."', '".$text."', '".$rating."', '".$pryority_1."', '".$pryority_2."', '".$know_me."');";
		$result = $db->query($sql);
				
		header('Location: success.php');
	}

?>
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
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="pic/client.ico"/>
		<script src="js/googleMap.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>
			$(function(){
			$(".i").css("color", "orange");
			});
		</script>

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body class="w3-padding" style="font-family: Constantia,'Comic Sans MS', 'Franklin Gothic'">

		<div id="w3-top" align="middle">
			<header class="w3-container">
  				<h1 align="center" style="font-family: 'Comic Sans MS'">Platinado</h1>
			</header>

			<nav class="w3-topnav w3-orange"><?php echo $_SESSION["text"];?></nav>
		</div>
<br>
		<div class="w3-container w3-border">
			
			<h3 style="font-family: 'Comic Sans MS'">
				Lucek Afonso
			</h3>
	
			<div class="w3-col m5" style="max-width:50%;">
				<p></p>
				<p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Bloco 14 Atp. 19 Rua 6<br>50-219 Cassenda, Luanda-Angola</p>
				<p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;(00) 244 924 56 81 82</p>
				<p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;lucian96@o2.pl</p>
			</div>
		</div>

<br>

		<div class="w3-container w3-border" id="googleMap" style="max-width:100%;height:500px"></div>
<br>

		<form class="w3-form w3-card-24" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myForm" method="post">
  			<h2>Napisz do mnie</h2>
			<div class="w3-group">      
				<input class="w3-input" type="text" name="flname" maxlength="35" required>
				<label class="w3-label" >
					Imię i Nazwisko
				</label>
			</div>
			
			<div class="w3-group">      
				<input class="w3-input" type="text" maxlength="40" name="email" required>
				<label class="w3-label">
					E-mail
				</label>
			</div>

			<div class="w3-group">      
				<textarea class="w3-input" name="description"></textarea>
				<label class="w3-label" maxlength="200">
					Tekst
				</label>
			</div>

			<select class="w3-select w3-section" name="rating" style="max-width:25%">

				<option value="" disabled selected>Co myślisz o stronie?</option>
				<option value="10">Bardzo dobra</option>
				<option value="8">Dobra</option>
				<option value="5">Może być</option>
			</select>

			<div class="w3-row w3-group">
				<div class="w3-half">
					<label class="w3-checkbox">
						Pryorytet:<br>
						<input type="checkbox" name="pryority_1" value="high" checked="checked">
						<span class="w3-checkmark"></span> 
						Bardzo ważne
					</label>
<br>
					<label class="w3-checkbox">
						<input type="checkbox" name="pryority_2" value="normal">
						<span class="w3-checkmark"></span> 
						Normalne
					</label>
<br>
					<label class="w3-checkbox">
						<input type="checkbox" disabled>
						<span class="w3-checkmark"></span>
						Nie ważne (Ok!)
					</label>
<br>
<br>
				</div>

				<div class="w3-half">
					<label class="w3-checkbox">
						Znamy się?<br>
						<input type="radio" name="radio" value="1" checked>
						<span class="w3-checkmark"></span> 
						Pewnie
					</label>
<br>
					<label class="w3-checkbox">
						<input type="radio" name="radio" value="0">
						<span class="w3-checkmark"></span>
						Nie, ale będziemy
					</label>
<br>
					<label class="w3-checkbox">
						<input type="radio" disabled>
						<span class="w3-checkmark"></span> 
						Nie wiem (Ja też nie!)
					</label>
				</div>
			</div>

			<input type="submit" class="w3-btn w3-orange" value="Wysyłać"/>
		</form>
		<div class="w3-container">
<br>

		<footer class="w3-container w3-padding-32 w3-theme w3-center">
			<p><?php echo $_SESSION["text2"];?></p>
			<p><?php echo $_SESSION["text3"];?></p>	
		</footer>		

		<!--script type="text/javascript">
		 	document.getElementsByTagName("div")[0].style.display = "none";
		 </script-->
	</body>
</html>
