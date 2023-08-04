<?php
// $GLOBALS['page']='';
session_start();
?>
<?php
	$language = 'en';
	$page='/index';
	// $activePageURL = $_SERVER['SCRIPT_URI'];
	$url = "http://naila.ddns.net/?page=pages/en/index"; //samo zamijenite ove dvije linije prilikom testiranja
	// $url = "http://localhost:8000/?page=pages/en$page";
	if($_GET['lang'] == 'bhs'){
	   	$_SESSION["lang"] = "bhs";
		$url = "http://naila.ddns.net/?page=pages/bhs/index"; //samo zamijenite ove dvije linije prilikom testiranja
		// $url = "http://localhost:8000/?page=pages/bhs$page";
	}
	else{
	   	$_SESSION["lang"] = "en";
	}
 	
	header("Location:".$url);
?> 