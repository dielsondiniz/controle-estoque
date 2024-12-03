<?php
// Conexão com o banco de dados
include("conexao.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE usuario_id=$id";
    echo $sql;
    $result = $conn->query($sql);
    if ($result) {
        $user = $result->fetch_assoc();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<form method="post">
    Nome: <input type="text" name="nome" value="<?php echo $user['nome']; ?>">
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>">
    <button type="submit">Atualizar</button>
</form>
