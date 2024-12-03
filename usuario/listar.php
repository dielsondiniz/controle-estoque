<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>

    <h1>Lista de Usuários</h1>
    <a href="index.php">Adicionar Novo Usuário</a><br><br>

    <?php
        // tentativa Conexão com o banco de dados
        $server = "localhost";
        $user = "root";
        $password = "root";
        $bdname = "usuarios";

        // tentativa Conectando ao banco de dados
        $conn = mysqli_connect($server, $user, $password, $bdname);

        // tentativaVerificando se a conexão foi bem-sucedida
        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        // tentativa Consulta SQL para buscar todos os usuários
        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($conn, $sql);

        // tentativa Verificando se há resultados
        if (mysqli_num_rows($result) > 0) {
            // tentativa Exibindo os resultados (usuários)
            while ($linha = mysqli_fetch_assoc($result)) {
                $nome = $linha['nome'];
                $email = $linha['email'];
                $cargo = $linha['cargo'];
                echo "<br><br>Nome: $nome <br> Email: $email <br> Cargo: $cargo <br>";
            }
        } else {
            echo "Nenhum usuário encontrado.";
        }

        // tentativa Fechar a conexão com o banco
        mysqli_close($conn);
    ?>

</body>
</html>
