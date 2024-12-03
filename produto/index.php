
    
<?php 
require "../conf/auth.php";
include "../conf/header.php"; 
include "../conf/utils.php"; 
include "../conf/conexao.php"; 

title("Produtos", "Visualize seus produtos cadastradas:", "inserir.php" );
    
$query = "SELECT m.nome as marca, p.*  FROM produtos as p, marcas as m where p.marca_id = m.marca_id";
$result = mysqli_query($conn, $query);
    ?> 


<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Descricao</th>
      <th scope="col">Preço_compra</th>
      <th scope="col">Preço_venda</th>
      <th scope="col">Quatindade</th>
      <th scope="col">Marca</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Imagem</th>
      <th scope="col">Codigos_Barra</th>
      <th scope="col">Data_criação</th>
      <th scope="col">Data_atualização</th>
      <th scope="col">Usuário</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($result)) {
    echo
    '<tr>
      <th scope="row">'.$linha["produto_id"].'</th>
      <td>'.$linha["nome"].'</td>
      <td>'.$linha["descricao"].'</td>
      <td>'.$linha["preco_compra"].'</td>
      <td>'.$linha["preco_venda"].'</td>
      <td>'.$linha["quantidade_estoque"].'</td>
      <td>'.$linha["marca"].'</td>
      <td>'.$linha["categoria_id"].'</td>
      <td>'.$linha["fornecedor_id"].'</td>
      <td>'.$linha["imagem_url"].'</td>
      <td>'.$linha["codigo_barras"].'</td>
      <td>'.$linha["data_criacao"].'</td>
      <td>'.$linha["data_atualizacao"].'</td>
      <td>'.$linha["usuario_criador_id"].'</td>
      <td><a href="editar.php?produto_id='.$linha["produto_id"].'" class="btn btn-primary"><i class="bi bi-pen"></i></a></td>
      <td><a href="delete.php?produto_id='.$linha["produto_id"].'" class="btn btn-primary" id="butao"><i class="bi bi-trash-fill" id= "cor"></i></a></td>
    </tr>
    ';
}
    ?>
  </tbody>
  </div>
</table>
</body>
</html>