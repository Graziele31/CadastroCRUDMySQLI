<?php

include './conexao/conectMYSQLI.php';

$sql = "UPDATE MyGuests SET lastname='Lucas' WHERE id={$_GET['id']}";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso!";
} else {
    echo 'Erro ao atualizar registro' . $conn->error;
}
$conn->close();


