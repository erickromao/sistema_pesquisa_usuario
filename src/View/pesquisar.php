<?php
require_once "../Model/autenticarADM.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
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
                    <input type="text" class="form-control" placeholder="Pesquisar por... (ID, nome ou email)" id="searchField">
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
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>erick</td>
                                <td>erick@gmail.com</td>
                                <td>yes</td>
                                <td>07-02-2003</td>
                            </tr>

                        </table>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            initEvents();

        });

        function initEvents() {

            $("#searchButton").on("click", function() {

                var $btn = $(this).button("loading");
                $("#searchField").attr("disabled", true);

            });

            $(".inputContainer").hover(function() {

                $(this).stop().animate({
                    borderBottomWidth: "4px"
                }, {
                    duration: 170,
                    complete: function() {}
                });

            }, function() {

                $(this).stop().animate({
                    borderBottomWidth: "2px"
                }, {
                    duration: 170,
                    complete: function() {}
                });

            });

        }


        function enableInput() {

            $("#searchButton").button("loading");
            $("#searchField").attr("disabled", false);

        }
    </script>
</body>

</html>