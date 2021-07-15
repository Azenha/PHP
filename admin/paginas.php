<?php require_once "../config.php";session_start();
if (isset($_SESSION['ativa'])): ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/usuarios.css">
<link rel="stylesheet" type="text/css" href="css/paginas.css">
	<title>Painel ADMIN</title>
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
	<hr>
	<div>		
		<h1 class='admsecondtitle' >Gerenciador de Páginas</h1>
		<a class='linkmenu' href="pagina_form.php">Inserir Nova Página</a>

		<?php if (isset($_GET['pagina_id'])) {
			$where = "id = ".$_GET['pagina_id'];
			$pageDelete = resultado($conexao, 'paginas', $where);
			
			echo "<h3>Você tem certeza que deseja deletar a página:<br>
					".$pageDelete['titulo']." </h3>"; ?>		
			<form method="post">
				<input type="hidden" name="id" value="<?php echo $_GET['pagina_id']; ?>">
				<input type="submit" name="deletar" value="Deletar">
			</form>
		<?php } ?>

		<?php if (isset($_POST['deletar'])) { 
				deletar($conexao, 'paginas', $_POST['id']);
			}
		?>		
		<table class='tabelasadmin' border="1">
			<thead>
				<tr>
					<th>Titulo</th>
					<th>Categoria</th>
					<th>Publicado</th>
					<th>Data</th>
					<th>Ação</th>
				</tr>				
			</thead>
			<tbody>
				<?php 
					$paginas = resultados($conexao, "paginas");
				?>
				<?php foreach ($paginas as $pagina) { ?>
					<tr>
						<td><?php echo $pagina['titulo']; ?></td>
						<td><?php echo $pagina['categoria']; ?></td>
						<td>
							<?php if($pagina['publicado'] == 1){
								echo "Sim";
								}else{
									echo "Não";
								}
							?>
						</td>
						<td><?php echo $pagina['data_cadastro']; ?></td>
						<td>			
							<a class='linkinterno' href="paginas.php?pagina_id=<?php echo $pagina['id']; ?>">Deletar</a>							
							 - <a class='linkinterno' href="pagina_form.php?pagina_id=<?php echo $pagina['id']; ?>">Editar</a>
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>

</body>
</html>
<?php else:
	logout();
endif;
?>