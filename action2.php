<?php
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"   

"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>Электронная библиотека</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<!--<meta http-equiv="Content-Style-Type" content="text/css>-->
<meta name="keywords"content="поисковые слова">
<meta name="description"content="краткое описание страници">
<link href="verstka.css"  rel="Stylesheet" type="text/css">
<link href="Style5.css"  rel="Stylesheet" type="text/css">
</head>

<body style="min-width:1200px;">

<div class="workarea">
<h1 align="center">Электронная библиотека.</h1>
<p class="workarea">
	<?php	
	echo "";
	?>
</p>

<form action="action3.php" method="post" id="form3">
<label>Login<br><input type="text" name="login" size="30"><br>

<label>Password<br><input type="text" name="pass" size="30"><br>

<input type="submit" name="submit3" value="Зарегистрироваться">
</form>
</body>';



?>