<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["id"])) {
    header("Location: ../../index.php");
} else if (!$_SESSION["isADM"]) {
    header("Location: ./painel.php");
}
