<?php

require_once "../Model/database.php";

if ((isset($_POST["tipo"]) && isset($_POST["inputPesquisa"])) && ($_POST["tipo"] != null && $_POST["inputPesquisa"] != null)) {
    $tipo = $_POST["tipo"];
    $inputPesquisa = $_POST["inputPesquisa"];

    switch ($tipo) {
        case "email":
            $selectUsers = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
            $selectUsers->bind_param("s", $inputPesquisa);

            if ($selectUsers->execute()) {

                $selectUsers->store_result();

                $selectUsers->bind_result($id, $nome, $email, $seha, $isADM, $dataRegistro);

                $resultado = array();

                while ($selectUsers->fetch()) {
                    $linha = array(
                        $id,
                        $nome,
                        $email,
                        $isADM,
                        $dataRegistro,
                    );

                    $resultado[] = $linha;
                }

                $selectUsers->close();
                $mysqli->close();

                echo json_encode($resultado);
            }
            break;
        case "id":
            $selectUsers = $mysqli->prepare("SELECT * FROM usuarios WHERE id = ?");
            $selectUsers->bind_param("i", $inputPesquisa);

            if ($selectUsers->execute()) {

                $selectUsers->store_result();

                $selectUsers->bind_result($id, $nome, $email, $seha, $isADM, $dataRegistro);

                $resultado = array();

                while ($selectUsers->fetch()) {
                    $linha = array(
                        $id,
                        $nome,
                        $email,
                        $isADM,
                        $dataRegistro,
                    );

                    $resultado[] = $linha;
                }

                $selectUsers->close();
                $mysqli->close();

                echo json_encode($resultado);
            }
            break;

        case  "nome":
            $selectUsers = $mysqli->prepare("SELECT * FROM usuarios WHERE LOWER(nome) LIKE CONCAT('%', LOWER(?), '%')");
            $selectUsers->bind_param("s", $inputPesquisa);

            if ($selectUsers->execute()) {

                $selectUsers->store_result();

                $selectUsers->bind_result($id, $nome, $email, $seha, $isADM, $dataRegistro);

                $resultado = array();

                while ($selectUsers->fetch()) {
                    $linha = array(
                        $id,
                        $nome,
                        $email,
                        $isADM,
                        $dataRegistro,
                    );

                    $resultado[] = $linha;
                }

                $selectUsers->close();
                $mysqli->close();

                echo json_encode($resultado);
            }
            break;
    }
} else {

    $selectUsers = $mysqli->prepare("SELECT * FROM usuarios");

    if ($selectUsers->execute()) {

        $selectUsers->store_result();

        $selectUsers->bind_result($id, $nome, $email, $seha, $isADM, $dataRegistro);

        $resultado = array();

        while ($selectUsers->fetch()) {
            $linha = array(
                $id,
                $nome,
                $email,
                $isADM,
                $dataRegistro,
            );

            $resultado[] = $linha;
        }

        $selectUsers->close();
        $mysqli->close();

        echo json_encode($resultado);
        exit;
    } else {
        die("Erro de execução: " . $selectUsers->error);
    }
}
