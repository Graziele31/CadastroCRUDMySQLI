<?php

$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "crud";
$port = 3306;

// Criar conexão
$conn = mysqli_connect($servidor,$usuario,$senha);

// Checar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Conexão realizada com sucesso!<br>";

// Criar banco
$sql = "CREATE DATABASE DB_teste1";
if (mysqli_query($conn, $sql)) {
  echo "Database criado com sucesso PROCEDURAL";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


