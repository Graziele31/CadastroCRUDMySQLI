<?php

session_start();

include './conexao/conectMYSQLI.php';

if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']); //escapa os caracteres especiais como aspas prevendo SQL injection
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $sql = "SELECT * FROM user WHERE usuario = '$usuario' && senha='$senha' LIMIT 1";
    $result = $conn->query($sql);
    $resultado = $result->fetch_assoc();

    if (empty($resultado)) {
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    } else if (isset($resultado)) {
        $_SESSION['usuarioNome'] = $resultado['Usuario'];
        header("Location: formularioCadastro.php");
    } else {
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: index.php");
    }
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: index.php");
}
