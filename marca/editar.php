<?php 
  if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
  } else {
    $id = $_GET['id'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marcas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .titleContainer{
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>

<div class="container mt-3">
  <div class="titleContainer" >
    <div>
      <h2>Nova Marca</h2>
      <p>Cadastre uma nova marca:</p>    
    </div>
    <div>
      <a href="index.php" class="btn btn-secondary">Voltar</a>
  </div>
</div> 
<?php 
    
include_once "../conf/conexao.php";

$sql = "select * from marcas where marca_id=$id";
$result = mysqli_query($conn, $sql);



$row = mysqli_fetch_array($result);
if ($row && $row["marca_id"]) {
  $marca_id = $row["marca_id"];
  $nome = $row["nome"];
  $descricao = $row["descricao"];

?>
<form method="POST" action="atualizar.php">
  <div class="form-group">
    <label for="marca_id">ID da Marca</label> 
    <input id="marca_id" name="marca_id" value="<?=$marca_id?>" type="text" required="required" readonly class="form-control">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label> 
    <input id="nome" name="nome" value="<?=$nome?>" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label> 
    <textarea id="descricao" name="descricao" cols="40" rows="5" class="form-control"><?=$descricao?></textarea>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
<?php
}
?>
</div>

</body>
</html>
<?php

  }

  ?>