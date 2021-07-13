<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
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
					<div>
					<img width="250px" src="admin/imagens/imagens-pagina/<?php echo $noticia['imagem']; ?>">

					<h2><a href="paginas.php?pagina=<?php echo $noticia['id']; ?>"><?php echo $noticia['titulo']; ?></a></h2>
					</div>					
					
				<?php } ?>
		</div>
		
			<?php include_once "layout/lateral.php"; ?>	
				
	</main>

	<footer>
		<?php include "layout/footer.php"; ?>	
	</footer>



</body>
</html>