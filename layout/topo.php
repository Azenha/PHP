<div class='header'>	
		<nav>	
	
			<ul class="menuul">
			
				<li class='menuli'><a href="index.php">Início</a></li>
				<li  class='menuli'><a href="noticias.php">Notícias</a></li>
				
				<?php 
				$where = " publicado = 1 AND categoria = 'Páginas' ";
				$menus = resultados($conexao, "paginas", $where); ?>

				<?php foreach ($menus as $menu) { ?>
					<li class='menuli'>
						<a href="paginas.php?pagina=<?php echo $menu['id']; ?>"><?php echo $menu['titulo']; ?></a>
					</li>
				<?php } ?>				
				
			</ul>
		</nav>	
		<img src="imagens/phplogo.png" alt="logotipo PHP" class="logotipo" />
				</div> 