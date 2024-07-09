<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
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
                    <h1 class="title">Registre-se</h1>
                    <hr />
                </div>
            </div>

            <div class="main-login main-center">
                <form id="formID" class="form-horizontal" method="post" action="">
                    <div class="form-group" id="container_nome">
                        <label for="usernameRegistroID" class="cols-sm-2 control-label">Nome Completo</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="usernameRegistro" id="usernameRegistroID" placeholder="Seu nome" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="container_email">
                        <label for="emailRegistroID" class="cols-sm-2 control-label">E-mail</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" name="emailRegistro" id="emailRegistroID" placeholder="Seu E-mail" required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group" id="container_senha">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="passwordRegistro" id="passwordRegistroID" placeholder="Senha" required />
                            </div>
                        </div>
                    </div>

                    <div class="form-group " id="container_botao">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" id="botao_registrar">Registrar</button>
                    </div>
                    <div class="login-register">
                        <a href="../../index.php" id="linkFazerLogin">Fazer Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/registro.js"></script>
</body>

</html>