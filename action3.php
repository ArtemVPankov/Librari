<?php
	// Соединение с сервером БД
	mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());

	// Выбор БД
	mysql_select_db("library") or die(mysql_error());

 	$strSQL = "SELECT * FROM registration where login = '".mysql_real_escape_string($_POST["login"])."'";
	$rs = mysql_query($strSQL);
	$num_rows = mysql_num_rows($rs);

	if ($num_rows<>0) {
		echo "Пользователь с таким именем уже существует! введите другой login!";
		?>
		<form action="action2.php" method="post" id="form1">
		<input type="submit" name="submit1" value="ввести заново">
		</form>
	<?php
	}
	else
	{ 
		$strSQL="insert into registration (login,pass) values
			(
				'".  mysql_real_escape_string($_POST["login"])."',
				'".  mysql_real_escape_string($_POST["pass"])."'
			)";

		mysql_query($strSQL) or die (mysql_error());
		echo "Пользователь зарегистрирован!";
		echo '
		<form action="test.php" method="post" id="form2">
		<input type="submit" name="submit1" value="Вернуться на главную страницу!">
		</form>
		';
	}

	// Закрытие соединения
	mysql_close();

?>