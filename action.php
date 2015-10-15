<?php
	//echo "Добавлен в базу ".$_POST["login"]." ".$_POST["pass"];
	if ($_POST["login"]=='') {echo 'Ошибка';}else{
	// Соединение с сервером БД
	mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
	mysql_select_db("library") or die(mysql_error());
	$strSQL = "SELECT * FROM registration where login = '".$_POST["login"]."'";
	$rs = mysql_query($strSQL);
	$num_rows = mysql_num_rows($rs);
	
	if ($num_rows==0) {
		echo "пользователь не найден. зарегистрируйтесь";
		echo '
		<form action="action2.php" method="post" id="form1">
		<input type="submit" name="submit1" value="зарегистрироваться">
		</form>
		<form action="test.php" method="post" id="form6">
		<input type="submit" name="submit1" value="вернуться на главную страницу">
		</form>
		';
	}
	
	else

	{ 
	// Цикл по набору записей $rs
	while($row = mysql_fetch_array($rs)) {
		if ($row['pass'] == $_POST["pass"]){
			echo "вы авторизировались";
			//include 'finder.php'; 
			
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
					<div class="workarea2">
					
					<label>Поиск по автору (Ф.И.О.)<br><input type="text" name="finder" size="60"><br>
					<label>Поиск по названию произведения<br><input type="text" name="finder" size="60">
					<form method="post">
					<input type="submit" name="Serch" value="Поиск">
					
					
					</form>
					<fieldset> 
														
					<legend align="center">Результаты поиска.</legend> 
					</fieldset>
					</div>
					</div>
					</body>
					</html>
		<?php	
						$action = $_POST['Serch'];
						switch ($action)
						 {
						  case 'first': echo $_POST['finder']; 	   break;
						 }
		?>
				
		<?php	
		}
		else
		{
			echo "Пароль не верный. введите занова";
			echo '
			<form action="test.php" method="post" id="form6">
			<input type="submit" name="submit1" value="вернуться на главную страницу">
			</form>
			';
		}
		break;
	  }
	}

	// Закрытие соединения
	mysql_close();
	}
?>
