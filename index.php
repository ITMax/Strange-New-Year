<?php
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include('config/config.php');

	if(isset($_GET['module'])) {
		if(isset($_GET['page'])) {
			$page = explode('.', $_GET['page']);
			$lnk = "/modules/$_GET[module]/$page[0]".".php";
			if(file_exists($lnk)){
				header("Location: /errors/404");
			} else {
				include($lnk);
			}
		}
	}
?>
