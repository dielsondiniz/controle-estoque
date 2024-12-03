<?php
include_once "../conf/conexao.php";

if (isset($_POST['marca_id']) && !empty($_POST['marca_id'])) {
  $marca_id = $_POST['marca_id'];
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];

  $sql = "UPDATE marcas SET nome = '$nome', descricao = '$descricao' WHERE marca_id = $marca_id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php");
  } else {
    echo  "<script>alert('Houve um erro ao atualizar as informações');</script>";
    echo $sql;
  }
  
} else {
  header("Location: index.php");
}

?>