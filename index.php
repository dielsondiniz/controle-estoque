<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marcas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .titleContainer{
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>

<form method="POST" action="valida_login.php">
  <input type="email" name="email" placeholder="Digite seu e-mail" required>
  <input type="password" name="senha" placeholder="Digite sua senha" required>
  <button type="submit">Enviar</button>
</form>
<?php 
if (isset($_GET['erro'])) {
  echo $_GET['erro'];
}
?>

</body>
</html>
