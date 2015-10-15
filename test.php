<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"   



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
<div class="v1"></div>
<div class="header"></div>
<div class="menu" align="left"><br><br>


</div>
<div class="workarea">
<h1 align="center">Электронная библиотека.</h1>
<p class="workarea">
	<?php	
	echo "";
	?>
</p>
<form action="action.php" method="post" id="form1">
<label>Login<br><input type="text" name="login" size="30"><br>

<label>Password<br><input type="password" name="pass" size="30"><br>

<input type="submit" name="submit1" value="Вход">
</form>

<form action="action2.php" method="post" id="form2">
<input type="submit" name="submit1" value="Регистрация">
</form>

<!--<br><br><label>Поиск<br><input type="text" name="finder" size="60"><br>


<fieldset> 
<legend align="center">Результаты поиска.</legend> 
<?php
	
	/*$book_name = "ytrvtjuyb";
	echo $book_name;*/	
	
?>
</fieldset>-->

<div class="workarea2" align="center">Copyright &copy </div>


</body>

</html>






