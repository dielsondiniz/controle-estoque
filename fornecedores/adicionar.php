<?php
include_once "../conf/conexao.php";

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];

  $sql = "INSERT INTO marcas (nome, descricao) VALUES ('$nome', '$descricao')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php");
  } else {
    echo  "<script>alert('Houve um erro ao inserir as informações');</script>";
    echo $sql;
  }
  
} else {
  header("Location: inserir.php");
}

?>