<?php

	if (isset($_POST['username'])){ $username = $_POST['username']; if ($username == ""){ unset($username); }}
	if (isset($_POST['password'])){ $password = $_POST['password']; if ($password == ""){ unset($password); }}

	if (empty($username) or empty($password)){
		exit("Вы не ввели информацию в поля!");
	}

	$username = stripslashes($username);
  $username = htmlspecialchars($username);

	$password = stripslashes($password);
  $password = htmlspecialchars($password);

	$username = trim($username);
  $password = trim($password);

	$password = "hack2015_".md5($password);

	if (preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/", $username)) {
		$result = mysql_query("SELECT * FROM `users` WHERE `email`='$username'", $db);
	} else {
		$result = mysql_query("SELECT * FROM `users` WHERE `username`='$username'", $db);
	}

  $myrow = mysql_fetch_array($result);

	if (empty($myrow['id'])){
		exit ("Извините, введённый вами login или пароль неверный.");
    } else{
		if ($myrow['password'] == $password) {
			$_SESSION['username'] = $myrow['username'];
			$_SESSION['id'] = $myrow['id'];

			//header("Location: ../?id=$_SESSION[id]");
			echo "Вы вошли";
		}
		else {
			exit ("Извините, введённый вами login или пароль неверный.");
		}
	}

?>
