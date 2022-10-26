<?php

$host = 'localhost';
$username = 'root';
$dbname='bd_petshop';
$password = '';

// Criar Conexão
$mysqli = new mysqli($host, $username, $password, $dbname);

// Checar Conexão
if ($mysqli->connect_errno) {
    die("Falha ao conectar: " . $mysqli->connect_error);
}

?>