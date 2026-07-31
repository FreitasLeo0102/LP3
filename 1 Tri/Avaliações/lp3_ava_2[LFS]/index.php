<?php 
require_once "Aluno.php";

echo "<h1>Avaliação 01<?h1>";
echo "<h2>Sistema de Gerenciamento de Alunos</h2>";

$a1 = new Aluno();
$a1->nome = "Leo";
$a1->matricula = 123;
$a1->curso = "Info";
$a1->nota1 = 9;
$a1->nota2 = 9;

$a2 = new Aluno();
$a2->nome = "Thiago";
$a2->matricula = 456;
$a2->curso = "Info";
$a2->nota1 = 2;
$a2->nota2 = 1;

$a3 = new Aluno();
$a3->nome = "Mary";
$a3->matricula = 789;
$a3->curso = "Adm";
$a3->nota1 = 4;
$a3->nota2 = 6;

echo "<h3>Aluno 01</h3>";
$a1->atualizarNotas(10, 10);
$a1->calcularMedia();
$a1->verificarAprovacao();
$a1->compararMedia($a2);
$a1->exibirBoletim();

echo "<h3>Aluno 02</h3>";
$a2->atualizarNotas(4, 5);
$a2->calcularMedia();
$a2->verificarAprovacao();
$a2->compararMedia($a3);
$a2->exibirBoletim();

echo "<h3>Aluno 03</h3>";
$a3->atualizarNotas(6, 7);
$a3->calcularMedia();
$a3->verificarAprovacao();
$a3->compararMedia($a1);
$a3->exibirBoletim();
?>