<?php
/**
 * MySQL Database Connection
 */
mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db('short') or die(mysql_error());

/**
 * Admin Credentials
 */
define('ADMIN', 'admin');
define('PASSWORD', '12345');
?>