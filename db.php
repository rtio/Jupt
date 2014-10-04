<?php
/**
 * MySQL Database Connection
 */
mysql_connect('localhost', 'jupadmin_short', 'jupiter@123') or die(mysql_error());
mysql_select_db('jupadmin_short') or die(mysql_error());

/**
 * Admin Credentials
 */
define('ADMIN', 'admin');
define('PASSWORD', '12345');
?>