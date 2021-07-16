<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/stylo.css">

<link rel="stylesheet" type="text/css" href="css/noticia.css">
	<title>Aula 7 - Bem Vindo</title>
	<?php include "layout/head.php"; ?>
</head>
<body>
	<header id="topo">
		<?php require "layout/topo.php"; ?>
	</header>
	
	<?php include_once "layout/banner.php"; ?>

	<main>
		<div class="conteudo">
			<?php 
				$where = " publicado = 1 AND categoria = 'Notícias' ";
				$noticias = resultados($conexao, "paginas", $where); ?>

				<?php foreach ($noticias as $noticia) { ?>
					<link rel="stylesheet" type="text/css" href="css/noticia.css">
					<div class='capsulanoticia'> 
					<div class='divnoticia'>

					<h2 ><a class='titulonoticia' href="paginas.php?pagina=<?php echo $noticia['id']; ?>">
					<?php echo $noticia['titulo']; ?></a></h2>

					
					</div>			
					<div>

					<img class='imgnoticia' src="admin/imagens/imagens-pagina/<?php echo $noticia['imagem']; ?>">		
				</div>
				</div> 
				<?php } ?>
		</div>
				
	</main>

	<footer>
		<?php include "layout/footer.php"; ?>	
	</footer>



</body>
</html>