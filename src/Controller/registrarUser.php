<?php
require_once "../Model/database.php";

if (isset($_POST["usernameRegistro"]) && isset($_POST["emailRegistro"]) && isset($_POST["passwordRegistro"])) {
    $username = $_POST["usernameRegistro"];
    $email = $_POST["emailRegistro"];
    $senha = $_POST["passwordRegistro"];

    $verifique_email = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");

    $verifique_email->bind_param("s", $email);
    $verifique_email->execute();

    $result = $verifique_email->get_result();

    if ($result->num_rows > 0) {
        die("Email já existente!");

    }
    $verifique_email->close();

    $query_code = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha, data_registro) VALUES (?, ?, ?, NOW());");
    if ($query_code) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $query_code->bind_param("sss", $username, $email, $senha_hash);

        try {
            $query_code->execute();
        } catch (Throwable $err) {
            die("Houve um erro na requisição: " . $err->getMessage());
        }
    }
}
