<?php require_once "../config.php";
	logar($conexao);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		h1{text-align: center}
		.form-login{
			max-width: 250px;
			margin: 0 auto;
			border: solid 1px #333;
			padding: 15px;
		}
		.form-login input{
			display: inline-block;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Painel de Acesso</h1>

	<form action="" method="post" class="form-login">
		<input type="email" required name="email" placeholder="Seu E-mail">
		<input type="text" required name="senha" placeholder="Sua Senha">
		<input type="submit" name="logar" value="Acessar">
	</form>

</body>
</html>