<?php
include('banco.php');

if(isset($_POST)){

	if($_POST['pagina'] == "index"){

		$pessoa = $_POST['pessoa'];

		$almoco = $_POST['almoco'];

		mysql_query("INSERT INTO `pedido_do_dia`(`fk_pessoa_id`, `fk_almoco_id`, `data`) VALUES ('".$pessoa."','".$almoco."',CURDATE())") or die(mysql_error());

		return header ("location: index.php");

	}else if($_POST['pagina'] == "opcao_dia"){

		$isTem = $_POST['isTem'];

		$dados = explode("|", $isTem);

		mysql_query("UPDATE `almoco` SET `isDoDia`='".$dados[1]."' WHERE `id_almoco`='".$dados[0]."'") or die(mysql_error());

	}
	
}
?>