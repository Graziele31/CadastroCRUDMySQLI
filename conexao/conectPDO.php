<?php

$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "MyDB";

//Criar conexao
try {
    $conn = new PDO("mysql:host=$servidor", $usuario, $senha);
    // define o modo de erro PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexao realizada com sucesso PDO!<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;