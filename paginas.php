<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Aula 7 - Bem Vindo</title>
	<link rel="stylesheet" type="text/css" href="css/stylo.css">

	<?php include "layout/head.php"; ?>
</head>
<body>
	<header id="topo">
		<?php require "layout/topo.php"; ?>
	</header>	
	<main>
		<div class="conteudo">
			<?php 
			$where = "id = ".$_GET['pagina'];
			$pagina = resultado($conexao, "paginas", $where); 
			?>
			<h1><?php echo $pagina['titulo']; ?></h1>
			<div>
				<?php echo $pagina['descricao']; ?>
			</div>


		</div>		
			
	</main>
	<footer>
		<?php include "layout/footer.php"; ?>	
	</footer>
</body>
</html>