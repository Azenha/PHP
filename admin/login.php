<?php require_once "../config.php";
	logar($conexao);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet">
	<title>Login</title>

</head>
<body>
	<div class='capsuladoselementos'> 
	<img src="css/phplogo.svg" alt="logotipo PHP" class="logotipoPHPadmin" />
	<h1 class='tituloPainel'>Painel de Acesso</h1>

	<form action="" method="post" class="form-login">
		<input type="email" required name="email" placeholder="Seu E-mail" class='inputadmin'>
		<input type="text" required name="senha" placeholder="Sua Senha" class='inputadmin'>
		<input type="submit" name="logar" value="Acessar" class='submitadmin'>
	</form>
<div> 
</body>
</html>