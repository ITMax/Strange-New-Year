<?php

	//include("/header.php");

	function wtf($p) {
		/*
		* Функция была создана для работы с массивами
		* Вывод массива с остановкой выполнения скрипта
		*/
		echo "<pre>";
		print_r($p);
		exit();
	}

	function redirect($link) {
		echo "<script>document.location.href = '$link'</script>";
	}

	function GetRealIp()
	{
		/*
		* Функция для получения реального IP адресса пользователя
		*/
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	if(isset($_GET['route'])) {
		$temp = explode('/', $_GET['route']);
		foreach($temp as $k=>$v) {
			if($k == 0) {
				$_GET['module'] = $v;
			} elseif ($k == 1) {
				if(!empty($v)) {
					$_GET['page'] = $v;
				}
			} else {
				$_GET['key'.($k-1)] = $v;
			}
		}
		unset($_GET['route']);
	}

	//Массив существующих модулей
	$allowed = array('home', 'account', 'errors');

	if(!isset($_GET['module'])) {
		// Если модуль не выбран, устанавливаем поумолчанию home
		$_GET['module'] = 'home';
	} elseif(!in_array($_GET['module'], $allowed)) {
		/*
		* Если модуль выбран, но его нет в массиве существующих модулей, тогда
		* переадресуем пользователя на страницу 404
		*/
		//header("Location: /errors/404");
		redirect("/errors/404");
		exit();
	}

	if(!isset($_GET['page'])) {
		// Если страница в модуле не выбрана, тогда устанавливаем поумолчанию index
		$_GET['page'] = 'index';
	}

	// Параметры для подключения к Базе Данных
	$host = 'localhost';
	//$host = '192.168.1.3';
	// $host = '192.168.2.109';
	$user = 'root';
	$dbpassword = '';
	$dbname = 'hack2015';

	// Подключение к Базе Данных
	$db = mysql_connect($host, $user, $dbpassword) or die('404 Not Found');
	mysql_select_db($dbname,$db) or die('404 Not Found');
?>
