<?php 
require_once 'db.php';

$arr = array("jan" => 0,
 				"fev" => 0, 
 				"mar" => 0, 
 				"abr" => 0, 
 				"mai" => 0, 
 				"jun" => 0, 
 				"jul" => 0,
 				"ago" => 0,
 				"set" => 0,
 				"out" => 0,
 				"nov" => 0,
 				"dez" => 0);

$arrMeses = array("janIni"=>'2014-01-01 00:00:00',
				  "janFin"=>'2014-01-31 23:59:59',
				  "fevIni"=>'2014-02-01 00:00:00',
				  "fevFin"=>'2014-02-28 23:59:59',
				  "marIni"=>'2014-03-01 00:00:00',
				  "marFin"=>'2014-03-31 23:59:59',
				  "abrIni"=>'2014-04-01 00:00:00',
				  "abrFin"=>'2014-04-30 23:59:59',
				  "maiIni"=>'2014-05-01 00:00:00',
				  "maiFin"=>'2014-05-31 23:59:59',
				  "junIni"=>'2014-06-01 00:00:00',
				  "junFin"=>'2014-06-30 23:59:59',
				  "julIni"=>'2014-07-01 00:00:00',
				  "julFin"=>'2014-07-31 23:59:59',
				  "agoIni"=>'2014-08-01 00:00:00',
				  "agoFin"=>'2014-08-31 23:59:59',
				  "setIni"=>'2014-09-01 00:00:00',
				  "setFin"=>'2014-09-30 23:59:59',
				  "outIni"=>'2014-10-01 00:00:00',
				  "outFin"=>'2014-10-31 23:59:59',
				  "novIni"=>'2014-11-01 00:00:00',
				  "novFin"=>'2014-11-30 23:59:59',
				  "dezIni"=>'2014-12-01 00:00:00',
				  "dezFin"=>'2014-12-31 23:59:59');

$rs = mysql_query("SELECT * FROM links ORDER BY linkID DESC");

while ($row=mysql_fetch_object($rs)) {

	if(($row->added >= strtotime($arrMeses["janIni"])) && ($row->added <= strtotime($arrMeses["janFin"]))){
		$arr["jan"]++;
	} 
	if(($row->added >= strtotime($arrMeses["fevIni"])) && ($row->added <= strtotime($arrMeses["fevFin"]))){
		$arr["fev"]++;
	}
	if(($row->added >= strtotime($arrMeses["marIni"])) && ($row->added <= strtotime($arrMeses["marFin"]))){
		$arr["mar"]++;
	}
	if(($row->added >= strtotime($arrMeses["abrIni"])) && ($row->added <= strtotime($arrMeses["abrFin"]))){
		$arr["abr"]++;
	}
	if(($row->added >= strtotime($arrMeses["maiIni"])) && ($row->added <= strtotime($arrMeses["maiFin"]))){
		$arr["mai"]++;
	}
	if(($row->added >= strtotime($arrMeses["junIni"])) && ($row->added <= strtotime($arrMeses["junFin"]))){
		$arr["jun"]++;
	}
	if(($row->added >= strtotime($arrMeses["julIni"])) && ($row->added <= strtotime($arrMeses["julFin"]))){
		$arr["jul"]++;
	}
	if(($row->added >= strtotime($arrMeses["agoIni"])) && ($row->added <= strtotime($arrMeses["agoFin"]))){
		$arr["ago"]++;
	}
	if(($row->added >= strtotime($arrMeses["setIni"])) && ($row->added <= strtotime($arrMeses["setFin"]))){
		$arr["set"]++;
	}
	if(($row->added >= strtotime($arrMeses["outIni"])) && ($row->added <= strtotime($arrMeses["outFin"]))){
		$arr["out"]++;
	}
	if(($row->added >= strtotime($arrMeses["novIni"])) && ($row->added <= strtotime($arrMeses["novFin"]))){
		$arr["nov"]++;
	}
	if(($row->added >= strtotime($arrMeses["dezIni"])) && ($row->added <= strtotime($arrMeses["dezFin"]))){
		$arr["dez"]++;
	}

}

print json_encode($arr);

?>