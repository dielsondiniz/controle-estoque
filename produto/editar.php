<?php
    include("conexao.php");

if(isset($_POST["nome"]) && $_POST["nome"] != "") {
  $idProd = $_POST["produto_id"];
  $nome = $_POST["nome"];
  $descri = $_POST["descricao"];
  $pc = $_POST["preco_compra"];
  $pv = $_POST["preco_venda"];
  $quantEsto = $_POST["quantidade_estoque"];
  $idMarca = $_POST["marca_id"];
  $idCate = $_POST["categoria_id"];
  $idForne = $_POST["fornecedor_id"];
  $ulrImagem = $_POST["imagem_url"];
  $codiBarr = $_POST["codigo_barras"];
  $dataatual = date("Y-m-d");
  $idUsuCria = $_POST["usuario_criador_id"];

  $sql = "update produtos set produto_id ='$idProd', nome = '$nome', descricao = '$descri', preco_compra = '$pc', preco_venda = '$pv', quantidade_estoque = '$quantEsto', marca_id = '$idMarca', categoria_id = '$idCate', fornecedor_id = '$idForne', imagem_url = '$ulrImagem', codigo_barras = '$codiBarr', data_atualizacao = '$dataatual', usuario_criador_id = '$idUsuCria' where produto_id = '$idProd'" ;

  $resul = mysqli_query($coon, $sql);
  if ($resul) {

    // echo "Deu bom".$sql;
    header("location: index.php");
  }else {
    echo "Deu ruim".$sql;
  }

} else {
    if(!isset($_GET['produto_id']) || $_GET['produto_id'] == "") {
      header("Location: index.php");
    }

    $prodEditar = $_GET['produto_id'];

    $sql = "select * from produtos where produto_id = $prodEditar";
    $resul = mysqli_query($coon, $sql);

    $linha = mysqli_fetch_array($resul);
    if(isset($linha["nome"])) {
      $idProd = $linha['produto_id'];
      $nome = $linha['nome'];
      $descri = $linha['descricao'];
      $pc = $linha['preco_compra'];
      $pv = $linha['preco_venda'];
      $quantEsto = $linha['quantidade_estoque'];
      $idMarca = $linha['marca_id'];
      $idCate = $linha['categoria_id'];
      $idForne = $linha['fornecedor_id'];
      $ulrImagem = $linha['imagem_url'];
      $codiBarr = $linha['codigo_barras'];
      $dataCria = $linha['data_criacao'];
      $dataatual = $linha['data_atualizacao'];
      $idUsuCria = $linha['usuario_criador_id'];
?>
    

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição do Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body{
            margin: 30px;
        }
        nav{
            margin: 30px;
            font-size: 30px;
            display: flex;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php"><i class="bi bi-arrow-left-circle"></i></a>
        <h1>Editar Produto</h1>
    </nav>
    <form action="editar.php" method="post">
        <div class="form-group">
            <label for="produto_id">Código do Produto</label> 
            <input id="produto_id" name="produto_id" type="number"  class="form-control" value="<?=$idProd?>">
        </div>
        <div class="form-group">
          <label for="nome">Nome do Produto</label> 
          <input id="nome" name="nome" type="text" class="form-control" value="<?=$linha["nome"]?>">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição do Produto</label> 
          <textarea id="descricao" name="descricao" cols="40" rows="5" class="form-control" value="<?=$linha["descricao"]?>"></textarea>
        </div>
        <div class="form-group">
          <label for="preco_compra">Preço de Compra</label> 
          <input id="preco_compra" name="preco_compra" type="decimal" required="required" class="form-control" value="<?=$linha["preco_compra"]?>">
        </div>
        <div class="form-group">
          <label for="preco_venda">Preço de Venda</label> 
          <input id="preco_venda" name="preco_venda" type="decimal" required="required" class="form-control" value="<?=$linha["preco_venda"]?>">
        </div>
        <div class="form-group">
          <label for="quantidade_estoque">Quantidade no Estoque</label> 
          <input id="quantidade_estoque" name="quantidade_estoque" type="number" required="required" class="form-control" value="<?=$linha["quantidade_estoque"]?>">
        </div>
        <div class="form-group">
          <label for="marca_id">Id Marca</label> 
          <input id="marca_id" name="marca_id" type="number" required="required" class="form-control" value="<?=$linha["marca_id"]?>">
        </div>
        <div class="form-group">
          <label for="categoria_id">Id da Categoria</label> 
          <input id="categoria_id" name="categoria_id" type="number" required="required" class="form-control" value="<?=$linha["categoria_id"]?>">
        </div>
        <div class="form-group">
          <label for="fornecedor_id">Id do Fornecedor</label> 
          <input id="fornecedor_id" name="fornecedor_id" type="number" class="form-control" value="<?=$linha["fornecedor_id"]?>">
        </div>
        <div class="form-group">
          <label for="imagem_url">Ulr da imagem</label> 
          <input id="imagem_url" name="imagem_url" type="text" class="form-control" value="<?=$linha["imagem_url"]?>">
        </div>
        <div class="form-group">
          <label for="codigo_barras">Codigo de barra do Produto</label> 
          <input id="codigo_barras" name="codigo_barras" type="text" class="form-control" value="<?=$linha["codigo_barras"]?>">
        </div>
        <div class="form-group">
            <label for="usuario_criador_id">Id do Usuário</label> 
            <input id="usuario_criador_id" name="usuario_criador_id" type="number" class="form-control" value="<?=$linha["usuario_criador_id"]?>">
        </div> 
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <?php
  }else{
    header("Location: index.php");
  }
}
?>
    
</body>
</html>