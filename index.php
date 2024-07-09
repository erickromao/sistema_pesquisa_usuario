<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">

	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./src/View/css/index.css">
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	<!-- Website Font style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="errorMessages" style="display: none;" class="alert alert-danger">
	</div>
	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h1 class="title">Bem-vindo </h1>
					<hr />
				</div>
			</div>
			<div class="main-login main-center">
				<form class="form-horizontal" method="post" id="formularioID">
					<div class="form-group">
						<label for="emailLoginID" class="cols-sm-2 control-label">E-mail</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="email" class="form-control" name="emailLogin" id="emailLoginID" placeholder="Seu E-mail" required />
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="passwordLoginID" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="passwordLogin" id="passwordLoginID" placeholder="Senha" required />
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button" id="botaoEnviar">Login</button>
					</div>
					<div class="login-register">
						<a href="./src/View/registroPage.php">Registre-se</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="./src/View/js/login.js"></script>

	<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	if (isset($_SESSION["id"])) {
		header("Location: ./src/View/painel.php");
	}
	?>

</body>

</html>