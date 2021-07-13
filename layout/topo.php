		<div id="logo">
			<img src="imagens/logo.png" alt="Logo">
		</div>


		<nav id="menu">
			<ul class="menu">
				<li><a href="index.php">Início</a></li>
				<li><a href="noticias.php">Notícias</a></li>
				
				<?php 
				$where = " publicado = 1 AND categoria = 'Páginas' ";
				$menus = resultados($conexao, "paginas", $where); ?>

				<?php foreach ($menus as $menu) { ?>
					<li>
						<a href="paginas.php?pagina=<?php echo $menu['id']; ?>"><?php echo $menu['titulo']; ?></a>
					</li>
				<?php } ?>				
				
			</ul>
		</nav>	