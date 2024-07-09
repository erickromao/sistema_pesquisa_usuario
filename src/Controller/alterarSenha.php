<?php
require_once "../Model/database.php";
if (!isset($_SESSION)) {
    session_start();
}

if (
    isset($_POST["new_password"]) && isset($_POST["confirm_password"])
    && isset($_POST["old_password"]) && isset($_SESSION["id"])
) {

    $id = $_SESSION["id"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];
    $old_password = $_POST["old_password"];

    if ($new_password != $confirm_password) {
        die("As novas senhas não conferem!");
    }

    $sqlUserPassword = $mysqli->prepare("SELECT senha FROM usuarios WHERE id = ?");
    $sqlUserPassword->bind_param("i", $id);

    try {
        $sqlUserPassword->execute();
        $sqlUserPassword->store_result();

        if ($sqlUserPassword->num_rows > 0) {
            $sqlUserPassword->bind_result($password_hash);
            $sqlUserPassword->fetch();

            if (password_verify($old_password, $password_hash)) {
                $sqlNewPassword = $mysqli->prepare("UPDATE usuarios SET senha = ? WHERE id = ?");

                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                $sqlNewPassword->bind_param("si", $new_password_hash, $id);

                if ($sqlNewPassword->execute()) {
                    die("Senha atualizada com sucesso!");
                } else {
                    die("Houve um erro ao atualizar a senha: " . $sqlNewPassword->error);
                }
                $sqlNewPassword->close();
            } else {
                die("Senha incorreta!");
            }
        }
    } catch (Throwable $e) {
        die("Ocorreu um erro: " . $e->getMessage());
    }
    $sqlUserPassword->close();
}
