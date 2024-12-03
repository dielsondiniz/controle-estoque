<?php
if(isset($_POST["nome"]) && $_POST["nome"] != ""){
    $idProd = $_POST["produto_id"];
    $nome = $_POST["nome"];
    $descri = $_POST["descricao"];
    $pc = $_POST["preco_compra"];
    $pv = $_POST["preco_venda"];
    $quantEsto = $_POST["quantidade_estoque"];
    $idMarca = $_POST["marca_id"];
    $idCate = $_POST["categoria_id"];
    $idForne = $_POST["fornecedor_id"];
    $urlImagem = $_POST["imagem_url"];
    $codiBarr = $_POST["codigo_barras"];
    $dataCria = date("Y-m-d");
    $dataatual = date("Y-m-d");
    $idUsuCria = $_POST["usuario_criador_id"];

    include("conexao.php");

$sql = "insert into produtos (produto_id, nome, descricao, preco_compra, preco_venda, quantidade_estoque, marca_id, categoria_id, fornecedor_id, imagem_url, codigo_barras, data_criacao, data_atualizacao, usuario_criador_id) values ($idProd, '$nome', '$descri', $pc, $pv, $quantEsto, $idMarca, $idCate, $idForne, '$urlImagem', '$codiBarr', '$dataCria', '$dataatual', $idUsuCria)";



    $resul = mysqli_query($coon, $sql);
    if ($resul){
        header("location: index.php");
    }else{
        echo "erro ".$sql;
    }

}else {
    echo "Preencha os Dados";
}

?>

