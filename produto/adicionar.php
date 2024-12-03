<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .form-group{
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
        <h1>Adicionar Produtro</h1>
    </nav>
<form method="post" action="inserir.php">
  <div class="form-group">
    <label for="produto_id">Código do Produto</label> 
    <input id="produto_id" name="produto_id" type="number" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="nome">Nome do Produto</label> 
    <input id="nome" name="nome" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição do Produto</label> 
    <textarea id="descricao" name="descricao" cols="40" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="preco_compra">Preço de Compra</label> 
    <input id="preco_compra" name="preco_compra" type="decimal" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="preco_venda">Preço de Venda</label> 
    <input id="preco_venda" name="preco_venda" type="decimal" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="quantidade_estoque">Quantidade no Estoque</label> 
    <input id="quantidade_estoque" name="quantidade_estoque" type="number" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="marca_id">Marca</label> 
    <select id="marca_id" name="marca_id" class="form-control">
    <option value="">Selecione</option>

    <?php
    include_once "../conf/conexao.php";
    $sql = "select * from marcas";
    $result = mysqli_query($conn, $sql );

    while ($row = mysqli_fetch_array($result)) {
      echo '<option value="'.$row["marca_id"].'">'.$row["nome"].'</option>';
    }
      ?>
    </select>
  </div> 
  <div class="form-group">
    <label for="categoria_id">Id da Categoria</label> 
    <input id="categoria_id" name="categoria_id" type="number" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="fornecedor_id">Id do Fornecedor</label> 
    <input id="fornecedor_id" name="fornecedor_id" type="number" class="form-control">
  </div>
  <div class="form-group">
    <label for="imagem_url">Ulr da imagem</label> 
    <input id="imagem_url" name="imagem_url" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="codigo_barras">Codigo de barra do Produto</label> 
    <input id="codigo_barras" name="codigo_barras" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="usuario_criador_id">Id do Usuário</label> 
    <input id="usuario_criador_id" name="usuario_criador_id" type="number" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</body>
</html>