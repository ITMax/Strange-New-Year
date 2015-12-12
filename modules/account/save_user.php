<?php
	if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
	if (isset($_POST['username'])) { $username = $_POST['username']; if ($username == '') { unset($username);} }
	if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
	if (isset($_POST['password'])) { $password = $_POST['password']; if ($password == '') { unset($password);} }
	if (isset($_POST['repassword'])) { $repassword = $_POST['repassword']; if ($repassword == '') { unset($repassword);} }

	if (empty($name) or empty($username) or empty($email) or empty($password) or empty($repassword)){
		exit("Вы ввели не всю информацию в обязательные поля!");
	}

	$name = stripslashes($name);
  $name = htmlspecialchars($name);

	$username = stripslashes($username);
  $username = htmlspecialchars($username);

	$email = stripslashes($email);
  $email = htmlspecialchars($email);

	$password = stripslashes($password);
  $password = htmlspecialchars($password);

	$repassword = stripslashes($repassword);
  $repassword = htmlspecialchars($repassword);

	$name = trim($name);
	$username = trim($username);
	$email = trim($email);
	$password = trim($password);
	$repassword = trim($repassword);

	if ($repassword != $password){
		exit("Пароли не совпадают!");
	}

  if (preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $username)) {
		exit("Неправильный Email адрес");
	}

	$password = "hack2015_".md5($password);

	$regdate = date("Y-m-d");
	$ip = GetRealIp();

	$result = mysql_query("SELECT `id` FROM `users` WHERE `username`='$username'", $db);
  $myrow = mysql_fetch_array($result);

  if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
  }

	$result2 = mysql_query ("INSERT INTO `users` (`name`, `username`, `email`, `password`, `reg_date`, `ip`)
	 VALUES('$name', '$username', '$email', '$password', '$regdate', '$ip')", $db) or die('Mysql error: '.mysql_error());

   if ($result2){
		   echo("Вы успешно зарегистрировались!");
   }
	 else {
     echo "Ошибка! Вы не зарегистрированы.";
   }
?>
