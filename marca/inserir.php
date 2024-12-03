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
<form method="POST" action="adicionar.php">
  <div class="form-group">
    <label for="nome">Nome</label> 
    <input id="nome" name="nome" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label> 
    <textarea id="descricao" name="descricao" cols="40" rows="5" class="form-control"></textarea>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</div>

</body>
</html>
