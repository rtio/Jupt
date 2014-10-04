<?php 
define("HOST", "localhost");
define("LOGIN", "jupadmin_almoco");
define("SENHA", "@LVxt,5O=yiR");
define("BANCO", "jupadmin_almoco");

$conecta = mysql_connect(HOST, LOGIN, SENHA) or print (mysql_error());

mysql_select_db(BANCO, $conecta) or print(mysql_error()); 
?>