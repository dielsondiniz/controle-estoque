<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) ) {

  include_once "./conf/conexao.php";
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);

  $sql = "select * from usuarios where email='$email' and senha='$senha'";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  $linhas = mysqli_num_rows($result);

  if ($linhas > 0) {
    $linha = mysqli_fetch_array($result);
    session_start();
    $_SESSION['isLogado'] = true;
    $_SESSION['nome'] = $linha['nome'];
    header("Location: produto");
  } else {

    // header("Location: index.php?erro=login invalido");
  }
  
} else {
  // header("Location: index.php");
}

?>
