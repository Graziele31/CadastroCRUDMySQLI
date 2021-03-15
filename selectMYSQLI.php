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
        <div class="container">
            <?php
            include './conexao/conectMYSQLI.php';
            $sql = "SELECT id, firstname, lastname, email FROM MyGuests ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table class='table table-primary table-striped'><tr><th>ID</th><th>Name</th><th>Ultimo nome</th><th>E-mail</th><th>Ações</th></tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>"
                    . "<td>" . $row["id"] . "</td>"
                    . "<td>" . $row["firstname"] . "</td> "
                    . "<td>" . $row["lastname"] . "</td>"
                    . "<td>" . $row["email"] . "</td>"
                    . "<td>"
                    . "<a href='formularioCadastro.php?id={$row["id"]}'> <img src='Images/Edite.png' width='32'/> </a>"
                    . "<a href='deleteMYSQLI.php?id={$row["id"]}'><img src='Images/Lixeira.png' width='32'/></a>"
                    . "</td>"
                    . "</tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </body>
</html>
