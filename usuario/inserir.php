<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $cargo = $_POST['cargo'];
    include_once "../conf/conexao.php";
    if ($senha === $confirmar_senha) {
        $senha = md5($senha);
        // Inserindo no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha, cargo) VALUES ('$nome', '$email', '$senha', '$cargo')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Novo usuário cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo 'Senhas não coincidem';
    }


}
?>

<!-- Formulário para cadastrar usuário -->
<form method="post">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Senha: <input type="password" name="senha"><br>
    Confirmar Senha: <input type="password" name="confirmar_senha"><br>
    Cargo: <input type="text" name="cargo"><br>
    <button type="submit">Cadastrar</button>
</form>
