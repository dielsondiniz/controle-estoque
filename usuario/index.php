<?php 
require "../conf/auth.php";
include "../conf/header.php"; 
include "../conf/utils.php"; 
include "../conf/conexao.php"; 

title("Usuario", "Visualize seus usuarios cadastradas:", "inserir.php" );

// Exibindo todos os usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Exibe todos os usuários
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $row["usuario_id"] . "</th>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["cargo"] . "</td>";
                        echo "<td>";
                        echo "<a href='atualizar.php?id=" . $row["usuario_id"] . "' class='btn btn-warning btn-sm'>Atualizar</a> ";
                        echo "<a href='?delete_id=" . $row["usuario_id"] . "' class='btn btn-danger btn-sm'>Excluir</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Nenhum usuário cadastrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
