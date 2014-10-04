<?php
ob_start();
session_start();
require_once 'db.php';
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Encurtador de URLs</title>
	
</head>
<body>
	

<div id="main" style="text-align: left;">
	
	<?php
	if(isset($_GET['out']))
	{
		session_destroy();
		session_unset();
		header("Location: admin.php");
		exit;
	}
	
	if(!isset($_SESSION['admin']) OR $_SESSION['admin'] != 'xyz0')
	{
	if(isset($_POST['sb']))
	{
		$u = trim(strip_tags($_POST['u']));
		$p = trim(strip_tags($_POST['p']));
		$u = addslashes($u);
		$p = addslashes($p);
		
		if($u == ADMIN AND $p = PASSWORD)
		{
			$_SESSION['admin'] = 'xyz0';
			session_regenerate_id();
			header("Location: admin.php");
			exit;
		}else{
			print '<h3>Usuário ou senha errados</h3>';
		}
		
	}
	?>
	<form method="post">
		Usuário : <br/>
		<input type="text" name="u"/><br/>
		Senha : <br />
		<input type="password" name="p"/><br/>
		<input type="submit" name="sb" value="Login" />
	</form>
	<?php
	}else{
		if(isset($_GET['delID']))
		{
			$id = intval($_GET['delID']);
			mysql_query("DELETE FROM links WHERE linkID = $id") or die(mysql_error());
			header("Location: admin.php");
			exit;
		}
		print '<a href="?out=logout">Sair!</a><br/><hr/><br/>';
		$rs = mysql_query("SELECT * FROM links ORDER BY linkID DESC");
		if(mysql_num_rows($rs))
		{
			?>
			<h3>Um total de<em><?php print mysql_num_rows($rs); ?></em> links encurtados</h3>
			<table width="640" id="table">
				<tr style="font-weight: bold">
					<td width="250">URL de Destino</td>
					<td width="200">URL curta</td>
					<td width="100">Data</td>
					<td width="70">IP</td>
					<td width="20">QtdClicks</td>
					<td width="20">Remover</td>
				</tr>
			<?php
			$i = 0;
			while ($row=mysql_fetch_object($rs)) {
				$i++;
				if ($i % 2 != 0) 
				{ 
			    	$rowColor = "#e9e9e9";
				}else{ 
			    	$rowColor = "#cccccc";
				}
				print '<tr bgcolor="'.$rowColor.'">
					  <td><a href="http://'.$row->destination.'" target="_blank">
					  	'.wordwrap($row->destination, 40, '<br/>', true).'
					  	 </a>
					  <td>http://'.$_SERVER['SERVER_NAME'].'/'.$row->string.'</td>
					  <td>'.date('d/m/Y H:iA', $row->added).'</td>
					  <td>'.long2ip($row->ip).'</td>
					  <td>'.$row->clicks.'</td>
					  <td><a href="?delID='.$row->linkID.'">[x]</a></td>
					  </tr>';	
			}
			?>
			</table>
			<?php
		}
	}
	?>
	
</div>
	
</body>
</html>
<?php ob_end_flush(); ?>