<?php

$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "MyDB";
# Criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $database);

// Checar conecção
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
//echo "Conexão realizada com sucesso!";
