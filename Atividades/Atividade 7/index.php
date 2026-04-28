<?php
require_once "Funcionario.php";

echo "<h1>Atividade: Controle de Funcionários</h1>";

echo "<h3>Funcionário 1</h3>";
$f1 = new Funcionario();
$f1->codigo = 123;
$f1->nome = "TaLigada";
$f1->salario = 1500;
$f1->cargaHoraria = 160;

$f1->exibirDados();
$f1->calcularSalarioHora();
$f1->aumentarSalario(10);
$f1->exibirDados();

echo "<h3>Funcionário 2</h3>";
$f2 = new Funcionario();
$f2->codigo = 456;
$f2->nome = "Leleo";
$f2->salario = 35000;
$f2->cargaHoraria = 160;

$f2->exibirDados();
$f2->calcularSalarioHora();
$f2->aumentarSalario(20);
$f2->exibirDados();

echo "<h3>Funcionário 3</h3>";
$f3 = new Funcionario();
$f3->codigo = 789;
$f3->nome = "Maryzinha";
$f3->salario = 3000;
$f3->cargaHoraria = 160;

$f3->exibirDados();
$f3->calcularSalarioHora();
$f3->aumentarSalario(15);
$f3->exibirDados();
?>