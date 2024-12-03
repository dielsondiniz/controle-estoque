
<?php 
require "../conf/auth.php";
include "../conf/header.php"; 
include "../conf/utils.php"; 

title("Marcas", "Visualize suas marcas cadastradas:", "inserir.php" );
?> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    
include_once "../conf/conexao.php";

$sql = "select * from marcas";
$result = mysqli_query($conn, $sql );

while ($row = mysqli_fetch_array($result)) {
  echo '<tr>
          <td>'.$row["marca_id"].'</td>
          <td>'.$row["nome"].'</td>
          <td>'.$row["descricao"].'</td>
          <td><a href="editar.php?id='.$row["marca_id"].'"><i class="bi bi-pencil"></i></a> <a href="excluir.php?id='.$row["marca_id"].'"><i class="bi bi-trash"></i></a></td>
        </tr>';
}
?>
     
    </tbody>
  </table>
</div>

</body>
</html>