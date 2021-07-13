<?php session_start();
require_once "../config.php";
if (isset($_SESSION['ativa'])): ?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel ADMIN</title>
</head>
<body>
	<h1>Área Administrativa</h1>
	<?php 
		$tabela = "usuarios";
		$where = "id = ".$_SESSION['id'];
		$userLogado = resultado($conexao, $tabela, $where);
		
	?>
	<h2>Bem vindo, <?php echo $userLogado['nome']; ?></h2>

	<?php include "template/menu.php"; ?>		

</body>
</html>
<?php else:
	logout();
endif;
?>