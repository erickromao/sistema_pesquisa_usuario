<?php
require_once "../Model/autenticarADM.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Pesquisar Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/pesquisa.css">
</head>

<body>

    <div class="container">
        <div class="widthContraint">
            <div class="inputContainer">
                <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="logoModifier">Pesquisar Usuário(s)</span>
                    <input type="text" class="form-control" placeholder="Pesquisar por... (ID, nome ou email)" id="searchField" name="searchFieldN">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="searchButton" data-loading-text="Searching..">Pesquisar</button>
                        <a href="./painel.php" class="btn btn-primary" id="voltarID">Voltar</a>
                    </span>
                </div>
            </div>
            <div class="progressContainer">
            </div>
            <ul class="resultsContainer">
                <li>
                    <div class="panel panel-default" id="searchPanel">
                        <div class="panel-heading" id="searchPanelHeading">Resultado</div>

                        <table class="table" id="deviceTable">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Administrador</th>
                                <th>Data</th>
                            </tr>    
                        </table>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script src="./js/pesquisar.js"></script>

</body>

</html>