<?php session_start();
require_once "../config.php";
if (isset($_SESSION['ativa'])): ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/usuarios.css">
<link rel="stylesheet" type="text/css" href="css/paginas.css">
	<title class="tituloPainel"> Painel ADMIN</title>
	
</head>
<body>
<img src="css/phplogo.svg" alt="logotipo PHP" class="logo" />
	<h1 class='titleprincipal'>Área Administrativa</h1>
	<?php 
		$tabela = "usuarios";
		$where = "id = ".$_SESSION['id'];
		$userLogado = resultado($conexao, $tabela, $where);
		
	?>
	<h2 class='admsecondtitle' >Bem vindo, <?php echo $userLogado['nome']; ?></h2>

	<?php include "template/menu.php"; ?>		

</body>
</html>
<?php else:
	logout();
endif;
?>