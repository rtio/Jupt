<?php
require_once 'db.php';
if(isset($_GET['short']))
{
	$string = trim(strip_tags($_GET['short']));
	$rs = mysql_query('select destination from links where string = "'.mysql_real_escape_string($string).'"') or die(mysql_error());
	if(@mysql_num_rows($rs))
	{
		$row=@mysql_fetch_object($rs);
		$query='UPDATE `links` SET `clicks` = (clicks+1) WHERE `destination` = "'.$row->destination.'"';
		mysql_query($query);
		header("Location: http://".$row->destination);
		exit;
	}else{
		header("Location: index.php");
		exit;
	}
}else{
	header("Location: index.php");
	exit;
}

?>