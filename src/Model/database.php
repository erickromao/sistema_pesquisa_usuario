<?php

$hotname = "localhost";
$username = "root";
$passowrd = "";
$database = "cadastro";


$mysqli = new mysqli($hotname, $username, $passowrd, $database);

if ($mysqli->error) {
    die("Houve um erro ao conectar ao banco: " . $mysqli->error);
}
