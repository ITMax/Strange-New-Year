<?php
  include("/header.php");

  if (!empty($_SESSION['id']) and !empty($_SESSION['username'])) {
    $uid = $_SESSION['id'];
  } else {
    redirect("/");
  }

  $query = mysql_query("SELECT * FROM `users` WHERE `id`='$uid'", $db) or die('Mysql error: '.mysql_error());
  while ($user = mysql_fetch_array($query)) {
    echo "<span>Username: $user[username]</span><br />";
    echo "<span>Name: $user[name]</span><br />";
    echo "<span>Email: $user[email]</span><br />";
    echo "<span>Level: $user[level]</span><br />";
    echo "<span>Coins: $user[coins]</span><br />";
  }
?>
