<?php
if(isset($_GET["produto_id"]) && $_GET["produto_id"] != ""){
    $produto = $_GET["produto_id"];

    include("conexao.php");

    $sql = "delete from produtos where produto_id =($produto)";
    $resul = mysqli_query($coon, $sql); 
    header("location: index.php");

}
?>