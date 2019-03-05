<?php require("config.php"); $db->close();?>
<!DOCTYPE html>
<html lang='pl'>
	<head>
		<title>Lucek Afonso</title>
		<meta name="author" content="Lucio Afonso"/>
		<meta name="description" content="Success"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-16;"/>
		<meta http-equiv="cookie" content="userid=xyz;"/>
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="shortcut icon" href="pic/client.ico"/>

        <script>
        function loaded(){
            document.write("<strong>Thank you for your comment!</strong>");
            window.setTimeout(goTo, 1800);
        }
  
        function goTo(){
            window.location.href="index.php";
        }
        </script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body class="w3-padding" style="font-family: Constantia,'Comic Sans MS', 'Franklin Gothic'" onLoad="loaded()">
	</body>
</html>