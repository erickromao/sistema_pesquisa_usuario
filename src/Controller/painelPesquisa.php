<?php

require_once "../Model/database.php";

if (!isset($_GET["searchFieldN"])) {

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