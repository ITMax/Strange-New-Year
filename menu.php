<?php
	if(empty($_SESSION['username']) or empty($_SESSION['id'])) {
?>
<ul class="nav">
	<li><a href="/account/register">Регистрация</a></li>
	<li><a href="/account/auth">Вход</a></li>
</ul>
<?php
	} else {
?>
<ul class="nav">
	<li><a href="/account/settings">Settings</a></li>
	<li><a href="/account/exit">Log Out</a></li>
</ul>
<?php
	}
?>
