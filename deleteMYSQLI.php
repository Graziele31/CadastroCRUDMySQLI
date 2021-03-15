<?php

include './conexao/conectMysqli.php';

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id={$_GET['id']}";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Registro deletado com sucesso!</h3>";
} else {
    echo "<h3>Erro ao deletar registro: </h3> " . $conn->error;
}

$conn->close();