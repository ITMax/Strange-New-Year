<meta charset="utf-8" />
<?php
  if (empty($_SESSION['id']) and empty($_SESSION['username'])) {
?>
<title>Welcome</title>
<?php
  } else {
?>
<title></title>
<?php
  }
?>
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<!-- Scripts -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
