<?php
include_once 'exercicio01.php';



$produto = new Produto("Calça", "R$230.00", 4);

$produto->adicionarEstoque(7);
$produto->removerEstoque(2);
$produto->mostrarDetalhes();


?>