<?php
class database_manager {
	const HOST  = '127.0.0.1';
	const USER = 'root';
	const PASS = '';
	const DB = 'library';
	public $link;
	function __construct () {
      // Соединение с сервером БД
	  $this->link = mysql_connect("127.0.0.1", "root", "") or die (mysql_error ());

	  // Выбор БД
	  mysql_select_db("library", $this->link) or die(mysql_error());
	}
	public function close () {
      mysql_close($this->link);
	  return true;
	}
	public function get_record ($params=array()) {
	$where = array();
	$where_string = '';
	if ($params) {
		foreach ($params as $key=>$param) {
			$where[] = mysql_real_escape_string($key).'= "'.mysql_real_escape_string($param).'"';
		}
		$where_string = implode(' AND ', $where);
	}

	   $strSQL = "SELECT * FROM registration where $where_string";

	   $rs = mysql_query($strSQL, $this->link);
	   $num_rows = mysql_num_rows($rs);
	   if ($num_rows<>0) {
		return true;
	   } else {
	    return false;
	   }
	}
	public function insert_record ($params) {
		$strSQL="insert into registration (login,pass) values
			(
				'".  mysql_real_escape_string($params["login"])."',
				'".  mysql_real_escape_string($params["pass"])."'
			)";

		$id = mysql_query($strSQL, $this->link) or die (mysql_error());
		return $id;
	}
}



?>