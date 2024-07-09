<?php
require_once "../Model/database.php";
if (isset($_POST["emailLogin"]) && isset($_POST["passwordLogin"])) {

    $email = $_POST["emailLogin"];
    $senha = $_POST["passwordLogin"];

    $sql_code = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");

    if ($sql_code) {
        $sql_code->bind_param("s", $email);

        try {
            $sql_code->execute();
            $sql_code->store_result();

            if ($sql_code->num_rows > 0) {
                $sql_code->bind_result($userID, $userNome, $userEmail, $userPassword, $isADM, $dataRegistro,);
                $sql_code->fetch();

                echo $email . "<br>" . $senha . "<br>" . $userPassword . "<br>";

                if (password_verify($senha, $userPassword)) {
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    $_SESSION["id"] = $userID;
                    $_SESSION["nome"] = $userNome;
                    $_SESSION["email"] = $userEmail;
                    $_SESSION["dataRegistro"] = $dataRegistro;
                    $_SESSION["isADM"] = $isADM;

                    echo "Login feito com sucesso!";
                } else {
                    echo "E-mail ou senha incorreta!";
                }
            } else {
                echo "E-mail ou senha incorreta!";
            }
        } catch (Throwable $e) {
            echo  "Ocorreu um erro na consulta ao banco: " . $e->getMessage();
        }
    } else {
        echo "Houve um erro na consulta ao banco: " . $mysqli->error;
    }
}
