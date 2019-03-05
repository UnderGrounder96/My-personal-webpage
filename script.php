<?php
	session_start();
//-------------------------------------------------Nav
	$tab = array("<a href='index.php'>Stona Główna</a>",
	"<a href='news.php'>Wiadomości</a>",
	"<a href='games.php'>Gry</a>",
	"<a href='about.php'>O mnie</a>",
	"<a href='gallery.php'>Galeria</a>",
	"<a href='contact.php'>Kontakt</a>");
		
	$x = count($tab);
	$_SESSION["text"] = "";
	
	for($i = 0; $i < $x; $i++) 
		if($i<$x-1)
			$_SESSION["text"] .= $tab[$i] . " | ";
		else
			$_SESSION["text"] .= $tab[$i];
		
//------------------------------------------------Fot		
	$tab2 = array("<a class='w3-btn-floating w3-white' href='http://fb.com/PlatinadoGamer' target='_blank' title='Facebook'><i class='fa fa-facebook i'></i></a>",
  			"<a class='w3-btn-floating w3-white' href='http://twitter.com/UnderGrounder96' target='_blank' title='Twitter'><i class='fa fa-twitter i'></i></a>",
  			"<a class='w3-btn-floating w3-white' href='http://platinadogamer.blogspot.com' target='_blank' title='Google +'><i class='fa fa-google-plus i'></i></a>"
	);
	
	$y = count($tab2);
	$_SESSION["text2"] = "";
	
	for($i = 0; $i < $y; $i++) 
		$_SESSION["text2"] .= $tab2[$i] . "\n";	

//-------------------------------------------------Cop&Dat	
	$_SESSION["text3"] = "&copy; " . date("Y"). " Platinado. All rights reserved.";
?>