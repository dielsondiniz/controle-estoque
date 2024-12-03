<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
  include_once "../conf/conexao.php";
  $id = $_GET['id'];
  $sql = "delete from marcas where marca_id=$id";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: index.php");
  } else {
    echo "Houve erro ao excluir o registro";
  }
} else {
  header("Location: index.php");
}

?>