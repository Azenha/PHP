<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/stylo.css">

	<title>PHP Page</title>
	<?php include "layout/head.php"; ?>
</head>
<body>
	<header id="topo">
		<?php require "layout/topo.php"; ?>
	</header>
	
	<?php include_once "layout/banner.php"; ?>

	<main>
		<div class="conteudo">
			<h1>Bem Vindos Devs <link rel="stylesheet" type="text/css" href="css/stylo.css"></h1>
			<br>
			<p> Página dedicada aos programadores e programadoras que já trabalharam com PHP.</p>
			<p> Venha saber as novidades, compartilhar códigos, bugs e histórias de  deploys <br> as sextas-feiras com a linguagem mais polêmica da área tech. </p>
		</div>
		
			<?php include_once "layout/lateral.php"; ?>	
				
	</main>

	<footer>
		<?php include "layout/footer.php"; ?>	
	</footer>



</body>
</html>