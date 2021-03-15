<?php

include './conexao/conectMYSQLI.php';

$Acao = $_POST["Acao"];
$Id = $_POST['Id'];

if ($Acao == 'Cadastrar') {
    $firstname = ($_POST["firstname"]);
    $lastname = ($_POST["lastname"]);
    $email = ($_POST["email"]);

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('$firstname', '$lastname', '$email');";

    if ($conn->multi_query($sql) === TRUE) {
        $ultimo_id = $conn->insert_id;
        echo "<h3>Registo criado com sucesso!</h3>" . '<br>' . '<h4>Último registro nº: </h4>' . $ultimo_id;
    } else {
        echo "<h3>Erro: </h3>" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    $firstname = ($_POST["firstname"]);
    $lastname = ($_POST["lastname"]);
    $email = ($_POST["email"]);

    $sql = "UPDATE MyGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$Id";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Registro atualizado com sucesso!</h3>";
    } else {
        echo "<h3>Erro ao atualizar registro</h3>" . $conn->error;
    }

    $conn->close();
}
