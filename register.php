<?php
require 'db.class.php';
if (isset($_POST['login']) && isset($_POST['pass']) ) {
	$DB = new database_manager();
	$get_params = array('login'=>$_POST['login']);
	$insert_params = array('login'=>$_POST['login'], 'pass'=>$_POST['pass']);
	if ($DB->get_record($get_params))
	{
			echo "Пользователь с таким именем уже существует! введите другой login!";
	} else {
		if ($DB->insert_record($insert_params)) {
			echo "Пользователь зарегистрирован!";
			echo '
			<a href="test.php">Перейти на главную страницу</a>
			';
			die();
		}
	}
}
?>
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

<form action="register.php" method="post" id="form3">
<label>Login<br><input type="text" name="login" size="30"><br>

<label>Password<br><input type="text" name="pass" size="30"><br>

<input type="submit" name="submit3" value="Зарегистрироваться">
</form>
</body>