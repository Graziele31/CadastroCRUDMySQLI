<?php
session_start();

include './conexao/conectMysqli.php';

if (isset($_GET['id'])) {
    $Acao = "Editar";
    $sql = "SELECT * FROM MyGuests WHERE id={$_GET['id']}";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $Id = $row["id"];
        $Nome = $row["firstname"];
        $Sobrenome = $row["lastname"];
        $Email = $row["email"];
    }
} else {
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sobrenome = "";
    $Email = "";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de cadastro</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="background: #ccccff; margin-top: 100px; padding-bottom: 20px" >
            <div>
                <h1>Formulário de cadastro</h1>
                <h6><a href="sair.php"><span class="btn btn-danger text-center" style="float: right">Sair</span></a></h6>
            </div>
            <div>
                <?php
                echo '<br>';
                ?>
            </div>
            <form method="POST" action="Insert.php">
                <input type="hidden" id="Acao" name="Acao"  value="<?php echo $Acao; ?>">
                <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
                <div class="form-group">
                    <label>Nome: </label>
                    <input class="form-control" type="text" name="firstname" placeholder="Escreva seu primeiro nome" value="<?php echo $Nome; ?>">
                </div>
                <div class="form-group">
                    <label>Sobrenome: </label>
                    <input class="form-control" type="text" name="lastname" placeholder="Escreva seu sobrenome" value="<?php echo $Sobrenome; ?>">
                </div>
                <div class="form-group">
                    <label>E-mail: </label>
                    <input class="form-control" type="email" name="email" placeholder="xxxxxxx@xxxxxx.com" value="<?php echo $Email; ?>">
                </div>
                <input class="btn btn-success" type="submit" name="submit" value="<?php echo $Acao; ?>">  
                <a href="selectMYSQLI.php"><span class="btn btn-info"> Listar </span></a>
            </form>
        </div>
    </body>
</html>
