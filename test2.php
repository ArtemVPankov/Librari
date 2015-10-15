<form method='post'>
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
					<label>Поиск\Добавление\Удаление<br>					
					
														
					<label>Ф.И.О. автора<br>
					<input type=text name="Autor"><br>
					<label>Название книги<br>
					<input type=text name="books">
					<input type=submit name="Buttons" value="Найти">
					<input type=submit name="Buttons" value="Добавить">
					<input type=submit name="Buttons" value="Редактировать">
					<input type=submit name="Buttons" value="Удалить"><br><br>
					
					
					<fieldset> 
														
					<legend align="center">Результаты поиска.</legend> 

					<?php
						$action = $_POST['Buttons'];
						switch ($action)
						 {
						case 'Найти': 
							echo "Найти"; 	   
							mysql_connect("127.0.0.1", "root", "") or die (mysql_error ()); //подключение к серверу
							mysql_select_db("library") or die(mysql_error()); // подключ к базе

							$strSQL = "SELECT * FROM books_avtors where"; // запрос к серверу с поиском строк
							if ($_POST["Autor"]<>''){$strSQL=$strSQL." avtors_names = ".mysql_real_escape_string($_POST["Autor"])." ";}; //проверка на заполненность реквизита
							if ($_POST["books"]<>''){$strSQL=$strSQL." books_names  = ".mysql_real_escape_string($_POST["books"])." ";}; //проверка на заполненность реквизита
							
							echo $strSQL; 	   
							/*
							$rs = mysql_query($strSQL);
							$num_rows = mysql_num_rows($rs);
							
							if ($num_rows<>0) {
								echo "ибн уй";
							}*/
							mysql_close(); //закрытие базы данных
						break;
						  
						case 'Добавить': // добавление новой книги
							if ($_POST["Autor"]=='' or $_POST["books"]=='') {break;}
							mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());
							mysql_select_db("library") or die(mysql_error());
							$strSQL="insert into books_avtors (avtors_names,books_names) values 
								(
									'".  mysql_real_escape_string($_POST["Autor"])."', 
									'".  mysql_real_escape_string($_POST["books"])."'
								)";//запрос на добавдление даных
							mysql_query($strSQL) or die (mysql_error()); //запрос
							echo "Книга добавлена: ".$_POST["books"]." Автор:".$_POST["Autor"];

							mysql_close();
						break;

						case 'Редактировать':
						echo "Редактировать"; 	   
						break;

						case 'Удалить':
						echo "Удалить"; 	   
						break;
						}
					?>
				</fieldset>
					</div>
					</body>
					</html>

</form>
