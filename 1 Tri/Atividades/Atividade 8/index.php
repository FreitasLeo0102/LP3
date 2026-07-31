<?php 
require_once "Veiculo.php";

echo "<h1>Atividade: Controle de Veículos</h1>";

echo "<h3>Veículo 1</h3>";
$v1 = new Veiculo();
$v1->marca = "Toyota";
$v1->modelo = "Corolla";
$v1->ano = 2020;
$v1->combustivel = 50;
$v1->consumoMedio = 12;

$v1->exibirInformacoes();
$v1->abastecer(20);
$v1->calcularAutonomia();
$v1->exibirInformacoes();


echo "<h3>Veículo 2</h3>";
$v2 = new Veiculo();
$v2->marca = "Honda";
$v2->modelo = "Civic";
$v2->ano = 2021;
$v2->combustivel = 45;
$v2->consumoMedio = 10;

$v2->exibirInformacoes();
$v2->abastecer(15);
$v2->calcularAutonomia();
$v2->exibirInformacoes();


echo "<h3>Veículo 3</h3>";
$v3 = new Veiculo();
$v3->marca = "Ford";
$v3->modelo = "Focus";
$v3->ano = 2022;
$v3->combustivel = 40;
$v3->consumoMedio = 12;

$v3->exibirInformacoes();
$v3->abastecer(10);
$v3->calcularAutonomia();
$v3->exibirInformacoes();
?>