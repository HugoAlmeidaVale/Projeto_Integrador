<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$banco = 'tanajura_info';
		$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());
	?>
	<?php
		$nome = $_POST['nome'];
		$site = $_POST['site'];
		$sql = mysql_query("INSERT INTO marca(nome, site) VALUES ('$nome', '$site')");

		echo "<center><h1>Seu cadastro foi realizado com sucesso!</h1></center>";
	?>

</body>
</html>