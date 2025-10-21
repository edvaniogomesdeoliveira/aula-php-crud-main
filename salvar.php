<?php

require 'conector.php';

$nome = $_POST['nome'];
$preco_compra = $_POST['compra'];
$preco_venda = $_POST['venda'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO produtos (nome, preco_compra, preco_venda, estoque) VALUES ('$nome', $preco_compra, $preco_venda, $estoque)";

if (mysqli_query($con, $sql)) {
    echo 'Novo registro criado com sucesso';
} else {
    echo 'Erro: ' . $sql . '<br>' . mysqli_error($con);
}

mysqli_close($con);

header('Location: list.php');
exit;
?>