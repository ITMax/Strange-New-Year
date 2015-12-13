<meta charset="utf-8" />
<?php
  if (empty($_SESSION['id']) and empty($_SESSION['username'])) {
?>
<title>Welcome - Alpha Test v0.1</title>
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
