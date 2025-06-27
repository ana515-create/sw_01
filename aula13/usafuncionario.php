<?php
include("Funcionario.class.php");

$func = new Funcionario("Rebeca", 1250);

echo $func->exibirInformacoes() . "<br>";

$func->AumentarSalario(10);

echo $func->exibirInformacoes();
?>