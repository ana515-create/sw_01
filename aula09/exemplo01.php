<?php
include_once 'Pessoa.class.php';

//Instancia de um objeto (uma pessoa)
$pessoa01 = new Pessoa;
$pessoa02 = new Pessoa;

//var_dump($pessoa01);

//atibuição de valores para o objeto
$pessoa01->Nome = 'Fulano';
$pessoa01->Altura = 1.85;
$pessoa01->Peso = 85;


$pessoa02->Nome = 'Bia';
$pessoa02->Altura = 1.42;
$pessoa02->Peso = 45;

//chamando um métado da classe
$pessoa01->MostrarDados();
$pessoa02->MostrarDados();

?>