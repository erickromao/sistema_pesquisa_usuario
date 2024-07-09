<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once "../Model/autenticar.php";
$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
$dataRegistro = $_SESSION["dataRegistro"];
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/painel.css">
</head>

<body>
    <div id="errorMessages" style="display: none;" class="alert alert-danger">
    </div>
    <div class="backgroundWhite">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked admin-menu">
                        <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i>Perfil</a></li>
                        <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i>Alterar Senha</a></li>
                        <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i>Configurações</a></li>
                        <li><a href="../Model/logout.php" id="logout-link"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                    </ul>
                </div>

                <div class="col-md-9 admin-content" id="profile">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nome</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $nome ?>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Email</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $email ?>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data de criação</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $dataRegistro ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 admin-content" id="settings">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Admin</h3>
                        </div>
                        <div class="panel-body">
                            <div class="label label-success">yes</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 admin-content" id="change-password">
                    <form method="post" id="formPassword">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="new_password" class="control-label panel-title">Nova Senha</label></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="new_password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirmar Senha</label></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="confirm_password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><label for="old_password" class="control-label panel-title">Senha antiga</label></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password_confirmation" id="old_password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info border">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="pull-left">
                                        <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/painel.js"></script>
</body>

</html>