<?php require_once "../config.php";session_start();
if (isset($_SESSION['ativa'])): ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/usuarios.css">
	<title>Painel ADMIN</title>
</head>
<body>
<img src="css/phplogo.svg" alt="logotipo PHP" class="logo" />
	<h1 class='admtitle'>Área Administrativa</h1>
	<?php 
		$tabela = "usuarios";
		$where = "id = ".$_SESSION['id'];
		$userLogado = resultado($conexao, $tabela, $where);		
	?>
	<h2 class='admsecondtitle'>Bem vindo, <?php echo $userLogado['nome']; ?></h2>

	<?php include "template/menu.php"; ?>

	<hr class='hradmin'>
	<div>

		<?php 

		$required = isset($_GET['usuario_id']) ? "" : "required";
		$atualizarInserir = isset($_GET['usuario_id']) ? "atualizar" : "cadastrar";
		$valNome = "";
		$valEmail = "";
		$data_registro = "";
		$valAdministrador = "";
		$valAvatar = "";

		if (isset($_GET['usuario_id'])) {		
			$buscar = "SELECT * FROM `usuarios` WHERE id = ".$_GET['usuario_id'];			
			$executarBusca = mysqli_query($conexao, $buscar);
			$usuarioEdit = mysqli_fetch_assoc($executarBusca);
			//print_r($usuarioEdit); 
			$usuario_id = $usuarioEdit['id'];
			$valNome = $usuarioEdit['nome'];
			$valEmail = $usuarioEdit['email'];
			$data_registro = $usuarioEdit['data_registro'];
			$valAdministrador = $usuarioEdit['administrador'];
			$valAvatar = $usuarioEdit['avatar'];

			if (isset($_POST['atualizar'])) {				
				updateUser($conexao, $usuario_id);
			}
		}
		?>





		<form method="post" enctype="multipart/form-data">
			<fieldset>
				<legend class='legendadmin'>Inserir novo Usuário</legend>

				<input type="hidden" name="id" value="<?php echo $usuario_id; ?>">

				<input type="text" value="<?php echo $valNome; ?>" name="nome" placeholder="Nome do usuário" required><br>
				<input type="email" value="<?php echo $valEmail; ?>" name="email" placeholder="E-mail do usuário" required><br>
				<input type="password" name="senha" placeholder="Crie uma senha" <?php echo $required; ?> ><br>
				<input type="password" name="repetesenha" placeholder="Repita sua senha" <?php echo $required; ?> ><br>
				

				<?php if (isset($_GET['usuario_id'])) { ?>
					<input type="date" value="<?php echo $data_registro; ?>" name="data_registro"><br>
				<?php } ?>
				<label for="administrador">0 = Usuário ; 1 = Administrador</label>
				<input type="number" min="0" max="1" value="<?php echo $valAdministrador; ?>" name="administrador" id="administrador" ><br>

				<?php if (!empty($valAvatar)) { ?>
					<div class="imagem">
						<img width="100px" src="imagens/avatar/<?php echo $valAvatar; ?>" alt="image">
					</div>
				<?php } ?>

				<label for="imagem">Upload de imagem: </label>
				<input class='inputimagem' type="file" id="imagem" name="imagem"><br>

				<input type="submit" name="<?php echo $atualizarInserir; ?>" value="Salvar">

			</fieldset>
		</form>

		<?php 		
		if(isset($_POST['cadastrar'])){
			insertUser($conexao);
		}
		?>

		<table class='tabelasadmin' border="1">
			<thead>
				<tr>
					<th>Nome do Usuário</th>
					<th>E-mail</th>
					<th colspan="2">Data de Cadastro</th>
					<th>Admin</th>
					<th>Avatar</th>
				</tr>				
			</thead>
			<tbody>
				<?php 
					$usuarios = resultados($conexao, "usuarios",1, "nome");
				?>
				<?php foreach ($usuarios as $usuario) { ?>
					<tr>
						<td><?php echo $usuario['nome']; ?></td>
						<td><?php echo $usuario['email']; ?></td>
						<td><?php echo $usuario['data_registro']; ?></td>
						<td>
							<?php if ($_SESSION['id'] == $usuario['id']) { ?>
								Seu usuário
							<?php } else { ?>
							<a class='linkinterno' href="usuario_delete.php?usuario_id=<?php echo $usuario['id']; ?>">Deletar</a>
							<?php } ?>
							 - <a class='linkinterno' href="usuarios.php?usuario_id=<?php echo $usuario['id']; ?>">Editar</a>
						</td>
						<td><?php echo $usuario['administrador']; ?></td>
						<td><img width="100px" src="imagens/avatar/<?php echo $usuario['avatar']; ?>" alt="image"></td>
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